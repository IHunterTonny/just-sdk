<?php

namespace Just;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Just\Api\ApiInterface;
use Just\HttpClient\Builder;

class Sdk
{
    private Builder $clientBuilder;
    private string $apiKey;

    public function __construct(string $apiKey, Options $options = null)
    {
        // Auth
        if (!$this->apiKey = $apiKey) {
            throw new \InvalidArgumentException('Required argument "api_key" has not been provided');
        }

        // Configure client
        $options = $options ?: new Options();
        $this->clientBuilder = $options->getClientBuilder();
        $this->clientBuilder->addPlugin(
            new BaseUriPlugin($options->getUri())
        );
        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin([
                'User-Agent' => 'php-just-api (https://github.com/IHunterTonny/php-just-api)',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
        );
    }

    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }

    public function api($name): ApiInterface
    {
        switch ($name) {
            case 'atc-call':
                $api = new \Just\Api\AtcCall($this);
                break;

            case 'background-report':
                $api = new \Just\Api\BackgroundReport($this);
                break;

            case 'background-report-full':
                $api = new \Just\Api\BackgroundReportFull($this);
                break;

            case 'balance':
                $api = new \Just\Api\Balance($this);
                break;

            case 'ca-checker':
                $api = new \Just\Api\CaChecker($this);
                break;

            case 'call-limit':
                $api = new \Just\Api\CallLimit($this);
                break;

            case 'call-task':
                $api = new \Just\Api\CallTask($this);
                break;

            case 'ca-pros-dl-not-checked':
                $api = new \Just\Api\CaProsDlNotChecked($this);
                break;

            case 'ca-pros-valid-dl':
                $api = new \Just\Api\CaProsValidDl($this);
                break;

            case 'car':
                $api = new \Just\Api\Car($this);
                break;

            case 'cc-checker':
                $api = new \Just\Api\CcChecker($this);
                break;

            case 'dl-mvr':
                $api = new \Just\Api\DlMvr($this);
                break;

            case 'dl-search':
                $api = new \Just\Api\DlSearch($this);
                break;

            case 'doctor-acc':
                $api = new \Just\Api\DoctorAcc($this);
                break;

            case 'email-task':
                $api = new \Just\Api\EmailTask($this);
                break;

            case 'ma-checker':
                $api = new \Just\Api\MaChecker($this);
                break;

            case 'mmn-manual':
                $api = new \Just\Api\MmnManual($this);
                break;

            case 'mms':
                $api = new \Just\Api\Mms($this);
                break;

            case 'persons-info':
                $api = new \Just\Api\PersonsInfo($this);
                break;

            case 'phone-cr':
                $api = new \Just\Api\PhoneCr($this);
                break;

            case 'phone-info':
                $api = new \Just\Api\PhoneInfo($this);
                break;

            case 'postage':
                $api = new \Just\Api\Postage($this);
                break;

            case 'random-ssn':
                $api = new \Just\Api\RandomSsn($this);
                break;

            case 'real-scans':
                $api = new \Just\Api\RealScans($this);
                break;

            case 'real-sim':
                $api = new \Just\Api\RealSim($this);
                break;

            case 'sip':
                $api = new \Just\Api\Sip($this);
                break;

            case 'sms':
                $api = new \Just\Api\Sms($this);
                break;

            case 'sms-task':
                $api = new \Just\Api\SmsTask($this);
                break;

            case 'ssn':
                $api = new \Just\Api\Ssn($this);
                break;

            case 'ssn-any-year':
                $api = new \Just\Api\SsnAnyYear($this);
                break;

            case 'ssn-any-year-auto':
                $api = new \Just\Api\SsnAnyYearAuto($this);
                break;

            case 'ui-checker':
                $api = new \Just\Api\UiChecker($this);
                break;

            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $api;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}