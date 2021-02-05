<?php declare(strict_types=1);

namespace DCarbone\PHPConsulAPI\Health;

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
use DCarbone\PHPConsulAPI\Agent\AgentService;

/**
 * Class ServiceEntry
 */
class ServiceEntry extends AbstractModel
{
    /** @var string */
    public $Node = '';
    /** @var \DCarbone\PHPConsulAPI\Agent\AgentService */
    public $Service = null;
    /** @var \DCarbone\PHPConsulAPI\Health\HealthChecks */
    public $Checks = null;

    /**
     * ServiceEntry constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (null !== $this->Service && !($this->Service instanceof AgentService)) {
            $this->Service = new AgentService((array) $this->Service);
        }
        if (!($this->Checks instanceof HealthChecks)) {
            $this->Checks = new HealthChecks($this->Checks);
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
     * @return \DCarbone\PHPConsulAPI\Agent\AgentService
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\Health\HealthChecks
     */
    public function getChecks(): HealthChecks
    {
        return $this->Checks;
    }
}
