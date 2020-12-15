<?php declare(strict_types=1);

namespace DCarbone\PHPConsulAPI\PreparedQuery;

/*
   Copyright 2016-2020 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class PreparedQueryDefinition
 * @package DCarbone\PHPConsulAPI\PreparedQuery
 */
class PreparedQueryDefinition extends AbstractModel
{
    /** @var string */
    public $ID = '';
    /** @var string */
    public $Name = '';
    /** @var string */
    public $Session = '';
    /** @var string */
    public $Token = '';
    /** @var \DCarbone\PHPConsulAPI\PreparedQuery\ServiceQuery */
    public $Service = null;
    /** @var \DCarbone\PHPConsulAPI\PreparedQuery\QueryDNSOptions */
    public $DNS = null;
    /** @var \DCarbone\PHPConsulAPI\PreparedQuery\QueryTemplate */
    public $Template = null;

    /**
     * PreparedQueryDefinition constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (!($this->Service instanceof ServiceQuery)) {
            $this->Service = new ServiceQuery((array)$this->Service);
        }
        if (!($this->DNS instanceof QueryDNSOptions)) {
            $this->DNS = new QueryDNSOptions((array)$this->DNS);
        }
        if (!($this->Template instanceof QueryTemplate)) {
            $this->Template = new QueryTemplate((array)$this->Template);
        }
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $id
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setID(string $id): PreparedQueryDefinition
    {
        $this->ID = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $name
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setName(string $name): PreparedQueryDefinition
    {
        $this->Name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession(): string
    {
        return $this->Session;
    }

    /**
     * @param string $session
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setSession(string $session): PreparedQueryDefinition
    {
        $this->Session = $session;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->Token;
    }

    /**
     * @param string $token
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setToken(string $token): PreparedQueryDefinition
    {
        $this->Token = $token;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\ServiceQuery|null
     */
    public function getService(): ?ServiceQuery
    {
        return $this->Service;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\PreparedQuery\ServiceQuery $service
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setService(ServiceQuery $service): PreparedQueryDefinition
    {
        $this->Service = $service;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\QueryDNSOptions|null
     */
    public function getDNS(): ?QueryDNSOptions
    {
        return $this->DNS;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\PreparedQuery\QueryDNSOptions $dns
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setDNS(QueryDNSOptions $dns): PreparedQueryDefinition
    {
        $this->DNS = $dns;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\QueryTemplate|null
     */
    public function getTemplate(): ?QueryTemplate
    {
        return $this->Template;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\PreparedQuery\QueryTemplate $template
     * @return \DCarbone\PHPConsulAPI\PreparedQuery\PreparedQueryDefinition
     */
    public function setTemplate(QueryTemplate $template): PreparedQueryDefinition
    {
        $this->Template = $template;
        return $this;
    }
}