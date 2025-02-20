<?php

declare(strict_types=1);

namespace DCarbone\PHPConsulAPI\Agent;

/*
   Copyright 2016-2021 Daniel Carbone (daniel.p.carbone@gmail.com)

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
use DCarbone\PHPConsulAPI\Health\HealthCheckDefinition;
use DCarbone\PHPConsulAPI\Transcoding;

/**
 * Class AgentCheck
 */
class AgentCheck extends AbstractModel
{
    protected const FIELDS = [
        self::FIELD_DEFINITION => [
            Transcoding::FIELD_TYPE  => Transcoding::OBJECT,
            Transcoding::FIELD_CLASS => HealthCheckDefinition::class,
        ],
        self::FIELD_NAMESPACE               => Transcoding::OMITEMPTY_STRING_FIELD,
    ];

    private const FIELD_DEFINITION = 'Definition';
    private const FIELD_NAMESPACE  = 'Namespace';

    /** @var string */
    public string $Node = '';
    /** @var string */
    public string $CheckID = '';
    /** @var string */
    public string $Name = '';
    /** @var string */
    public string $Status = '';
    /** @var string */
    public string $Notes = '';
    /** @var string */
    public string $Output = '';
    /** @var string */
    public string $ServiceID = '';
    /** @var string */
    public string $ServiceName = '';
    /** @var string */
    public string $Type = '';
    /** @var \DCarbone\PHPConsulAPI\Health\HealthCheckDefinition */
    public HealthCheckDefinition $Definition;
    /** @var string */
    public string $Namespace = '';

    /**
     * AgentCheck constructor.
     * @param array|null $data
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);
        if (!isset($this->Definition)) {
            $this->Definition = new HealthCheckDefinition(null);
        }
    }

    /**
     * @return string
     */
    public function getNode(): string
    {
        return $this->Node;
    }

    /**
     * @param string $Node
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setNode(string $Node): self
    {
        $this->Node = $Node;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckID(): string
    {
        return $this->CheckID;
    }

    /**
     * @param string $CheckID
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setCheckID(string $CheckID): self
    {
        $this->CheckID = $CheckID;
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
     * @param string $Name
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setName(string $Name): self
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setStatus(string $Status): self
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setNotes(string $Notes): self
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->Output;
    }

    /**
     * @param string $Output
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setOutput(string $Output): self
    {
        $this->Output = $Output;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceID(): string
    {
        return $this->ServiceID;
    }

    /**
     * @param string $ServiceID
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setServiceID(string $ServiceID): self
    {
        $this->ServiceID = $ServiceID;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setServiceName(string $ServiceName): self
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setType(string $Type): self
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\Health\HealthCheckDefinition
     */
    public function getDefinition(): HealthCheckDefinition
    {
        return $this->Definition;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\Health\HealthCheckDefinition $Definition
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setDefinition(HealthCheckDefinition $Definition): self
    {
        $this->Definition = $Definition;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->Namespace;
    }

    /**
     * @param string $Namespace
     * @return \DCarbone\PHPConsulAPI\Agent\AgentCheck
     */
    public function setNamespace(string $Namespace): self
    {
        $this->Namespace = $Namespace;
        return $this;
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->CheckID;
    }
}
