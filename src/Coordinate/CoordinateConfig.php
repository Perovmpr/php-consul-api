<?php namespace DCarbone\PHPConsulAPI\Coordinate;

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
 * Class CoordinateConfig
 * @package DCarbone\PHPConsulAPI\Coordinate
 */
class CoordinateConfig extends AbstractModel {
    public const DefaultDimensionality       = 8;
    public const DefaultVivaldiErrorMax      = 1.5;
    public const DefaultVivaldiCE            = 0.25;
    public const DefaultVivaldiCC            = 0.25;
    public const DefaultAdjustmentWindowSize = 20;
    public const DefaultHeightMin            = 10.0e-6;
    public const DefaultLatencyFilterSize    = 3;
    public const DefaultGravityRho           = 150.0;

    /** @var int */
    public $Dimensionality = 0;
    /** @var float */
    public $VivaldiErrorMax = 0.0;
    /** @var float */
    public $VivaldiCE = 0.0;
    /** @var float */
    public $VivaldiCC = 0.0;
    /** @var int */
    public $AdjustmentWindowSize = 0;
    /** @var float */
    public $HeightMin = 0.0;
    /** @var int */
    public $LatencyFilterSize = 0;
    /** @var float */
    public $GravityRho = 0.0;

    /**
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public static function Default(): CoordinateConfig {
        return new static([
            'Dimensionality'       => static::DefaultDimensionality,
            'VivaldiErrorMax'      => static::DefaultVivaldiErrorMax,
            'VivaldiCE'            => static::DefaultVivaldiCE,
            'VivaldiCC'            => static::DefaultVivaldiCC,
            'AdjustmentWindowSize' => static::DefaultAdjustmentWindowSize,
            'HeightMin'            => static::DefaultHeightMin,
            'LatencyFilterSize'    => static::DefaultLatencyFilterSize,
            'GravityRho'           => static::DefaultGravityRho,
        ]);
    }

    /**
     * @return int
     */
    public function getDimensionality(): int {
        return $this->Dimensionality;
    }

    /**
     * @param int $dimensionality
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setDimensionality(int $dimensionality): CoordinateConfig {
        $this->Dimensionality = $dimensionality;
        return $this;
    }

    /**
     * @return float
     */
    public function getVivaldiErrorMax(): float {
        return $this->VivaldiErrorMax;
    }

    /**
     * @param float $vivaldiErrorMax
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setVivaldiErrorMax(float $vivaldiErrorMax): CoordinateConfig {
        $this->VivaldiErrorMax = $vivaldiErrorMax;
        return $this;
    }

    /**
     * @return float
     */
    public function getVivaldiCE(): float {
        return $this->VivaldiCE;
    }

    /**
     * @param float $vivaldiCE
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setVivaldiCE(float $vivaldiCE): CoordinateConfig {
        $this->VivaldiCE = $vivaldiCE;
        return $this;
    }

    /**
     * @return float
     */
    public function getVivaldiCC(): float {
        return $this->VivaldiCC;
    }

    /**
     * @param float $vivaldiCC
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setVivaldiCC(float $vivaldiCC): CoordinateConfig {
        $this->VivaldiCC = $vivaldiCC;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdjustmentWindowSize(): int {
        return $this->AdjustmentWindowSize;
    }

    /**
     * @param int $adjustmentWindowSize
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setAdjustmentWindowSize(int $adjustmentWindowSize): CoordinateConfig {
        $this->AdjustmentWindowSize = $adjustmentWindowSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeightMin(): float {
        return $this->HeightMin;
    }

    /**
     * @param float $heightMin
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setHeightMin(float $heightMin): CoordinateConfig {
        $this->HeightMin = $heightMin;
        return $this;
    }

    /**
     * @return int
     */
    public function getLatencyFilterSize(): int {
        return $this->LatencyFilterSize;
    }

    /**
     * @param int $latencyFilterSize
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setLatencyFilterSize(int $latencyFilterSize): CoordinateConfig {
        $this->LatencyFilterSize = $latencyFilterSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getGravityRho(): float {
        return $this->GravityRho;
    }

    /**
     * @param float $gravityRho
     * @return \DCarbone\PHPConsulAPI\Coordinate\CoordinateConfig
     */
    public function setGravityRho(float $gravityRho): CoordinateConfig {
        $this->GravityRho = $gravityRho;
        return $this;
    }
}