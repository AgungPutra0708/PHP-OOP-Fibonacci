<?php
class Perhitungan
{
    private $aod,$yod,$bornonyear,$villagersnumber,$peoplekilled;

	function __construct($aod,$yod){
		$this->aod = $aod;
		$this->yod = $yod;
	}

    function perhitunganBornOnYear(){
        $bornonyear = $this->yod - $this->aod;
        if ($bornonyear < 0) {
            return -1;
        }else{
            return $bornonyear;
        }
    }
    function perhitunganVillager () {
        # string untuk menyimpan bilangan fibonacci
        $fibonacci = 0;
        $satuBilanganSebelumnya = 0;
        $duaBilanganSebelumnya = 1;
        $bornonyear = $this->yod - $this->aod;

        if ($bornonyear < 0) {
            return -1;
        }else{
            for ($i = 1; $i <= $bornonyear; $i++) {
              if ($i < 1) {
                $bilangan = $i;
              } else {
                $bilangan = $satuBilanganSebelumnya + $duaBilanganSebelumnya;
          
                # update variabel untuk bilangan sebelumnya
                $duaBilanganSebelumnya = $satuBilanganSebelumnya;
                $satuBilanganSebelumnya = $bilangan;
              }
            
              # tambahkan bilangan ke dalam string
              $fibonacci += $bilangan;
            }
    
            $this->villagersnumber = $fibonacci;
          
            return $this->villagersnumber;
        }
      
    }
    function average($perhitunganVillagerA,$perhitunganVillagerB,$banyakData){
        $average = ($perhitunganVillagerA+$perhitunganVillagerB)/$banyakData;
        return $average;
    }
    
    
}

?>