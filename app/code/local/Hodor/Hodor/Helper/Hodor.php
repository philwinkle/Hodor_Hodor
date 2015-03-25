<?php
class Hodor_Hodor_Helper_Hodor
{
    /**
     * Hodor hodor, hodor
     * 
     * @param string $hodor
     * @return string
     */
    public function hodorize($hodor)
    {
        $Hodor = $this;
        return $Hodor->hodor($hodor);
    }

    private function hodor($hodor)
    {
        return preg_replace('{\w+}', 'Hodor', $hodor);
    }
}