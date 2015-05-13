<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS;

/**
 * Class representing PricedCoveragesAType
 */
class PricedCoveragesAType
{

    /**
     * One specific coverage associated with this vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverage
     */
    private $pricedCoverage = null;

    /**
     * Adds as pricedCoverage
     *
     * One specific coverage associated with this vehicle.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverage(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverage[] = $pricedCoverage;

        return $this;
    }

    /**
     * isset pricedCoverage
     *
     * One specific coverage associated with this vehicle.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedCoverage($index)
    {
        return isset($this->pricedCoverage[$index]);
    }

    /**
     * unset pricedCoverage
     *
     * One specific coverage associated with this vehicle.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedCoverage($index)
    {
        unset($this->pricedCoverage[$index]);
    }

    /**
     * Gets as pricedCoverage
     *
     * One specific coverage associated with this vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType[]
     */
    public function getPricedCoverage()
    {
        return $this->pricedCoverage;
    }

    /**
     * Sets a new pricedCoverage
     *
     * One specific coverage associated with this vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverage
     * @return self
     */
    public function setPricedCoverage(array $pricedCoverage)
    {
        $this->pricedCoverage = $pricedCoverage;

        return $this;
    }


}
