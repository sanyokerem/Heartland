<?php
namespace Payum2\Heartland;

use Buzz\Client\ClientInterface;
use Payum2\Exception\Http\HttpException;
use Payum2\Exception\InvalidArgumentException;
use Payum2\Exception\LogicException;
use Payum2\Heartland\Soap\Base\Credentials;
use Payum2\Heartland\Soap\Base\MerchantCredentials;
use \SoapClient;

/**
 * @author Ton Sharp <Forma-PRO@66ton99.org.ua>
 */
class Api
{
    /**
     * @var array
     */
    protected $options = array(
        'env' => '',
        'application_id' => null,
        'username' => null,
        'password' => null,
    );

    /**
     * @var string
     */
    protected $soapClientClassName;

    /**
     * @var array
     */
    protected $soapOptions = array();

    /**
     * @var \Payum2\Heartland\SoapClient
     */
    protected $soapClient = null;

    /**
     * @param array $options
     * @param string $soapClientClassName
     *
     * @throw InvalidArgumentException
     */
    public function __construct(array $options, $soapClientClassName = 'Payum2\Heartland\SoapClient')
    {
        $this->options = array_replace($this->options, $options);
        $this->soapClientClassName = $soapClientClassName;

        if (empty($this->options['application_id'])) {
            throw new InvalidArgumentException('The application ID option must be set.');
        }
        if (empty($this->options['username'])) {
            throw new InvalidArgumentException('The username option must be set.');
        }
        if (empty($this->options['password'])) {
            throw new InvalidArgumentException('The password option must be set.');
        }
        if (!in_array($this->options['env'], array('', 'testing', 'staging'))) {
            throw new InvalidArgumentException(
                "The env option '{$this->options['env']}' is invalid, possible variants: " .
                    var_export($this->options['env'], true)
            );
        }
    }

    /**
     * @return string
     */
    protected function getApiEndpoint()
    {
        $host = 'heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl';
        $env = empty($this->options['env'])?'':$this->options['env'].'.';

        return sprintf(
            'https://%s%s',
            $env,
            $host
        );
    }

    /**
     * @param array $options
     *
     * @return Api $this
     */
    public function setSoapOptions(array $options)
    {
        $this->soapOptions = $options;
        return $this;
    }

    /**
     * @return array
     */
    public function getSoapOptions()
    {
        return $this->soapOptions;
    }

    /**
     * @param Credentials $credential
     * @return Credentials
     */
    protected function fillCredential(Credentials $credential)
    {
        $credential->setApplicationID($this->options['application_id']);
        $credential->setUserName($this->options['username']);
        $credential->setPassword($this->options['password']);
        return $credential;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        $credential = new Credentials();
        return $this->fillCredential($credential);
    }

    /**
     * @param string $merchantName
     *
     * @return Credentials
     */
    public function getMerchantCredentials($merchantName)
    {
        $credential = new MerchantCredentials();
        $credential->setMerchantName($merchantName);
        return $this->fillCredential($credential);
    }

    /**
     * @return \Payum2\Heartland\SoapClient
     */
    public function getSoapClient()
    {
        if (null === $this->soapClient) {
            $class = $this->soapClientClassName;
            $this->soapClient = new $class($this->getApiEndpoint(), $this->getSoapOptions());
        }
        if (!($this->soapClient instanceof SoapClient)) {
            throw new LogicException('Client should extend SoapClient class');
        }
        return $this->soapClient;
    }
}
