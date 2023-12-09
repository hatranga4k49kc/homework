<?php
//exercise 1
echo "random array a";
$a = range(0, 100);
shuffle($a);
$a = array_slice($a ,0,10);
echo '<pre>'; print_r($a); echo '</pre>';

echo "Loại bỏ bớt các phần tử có giá trị giống nhau sao cho mỗi giá trị chỉ xuất hiện trong a duy nhất 1 lần: </pre>";
$a = array_unique($a);
echo '<pre>'; print_r($a); echo '</pre>';

if (!function_exists('dd')) {
    function dd()
    {
         echo '<pre>';
         array_map(function($x) {var_dump($x);}, func_get_args());
         die;
    }
}

//exercise 2
class Exercise2 {
    public $a = [];
    public $b = [];
    public function randomNumber($number) {
        if ($number < 50 && $number > 0) {
            return $number;
        } else {
            return "số nhập phải nhỏ hơn 50";
        }
    }

    public function randomArray($number) {
        $a = range(0, 100);
        shuffle($a);
        $this->a = array_slice($a ,0, $number);
        return $this->a;
    }

    public function maxArray()
    {
        return max($this->a);
    }

    public function evenNumberMaxInArr() {
        $aNew = [];
        foreach ($this->a as $val) {
            if ($val % 2 == 0) {
                $aNew[] = $val;
            }
        }

        return max($aNew);
    }

    public function randomArrayNew() {
        $b = range(-20, 10);
        shuffle($b);
        $this->b = array_slice($b ,0, 10);
        return $this->b;
    }

    public function smallestOddNegativeNumber() {
        $aNew = [];
        foreach ($this->b as $val) {
            if ($val % 2 != 0 && $val < 0) {
                $aNew[] = $val;
            }
        }

        return min($aNew);
    }

    public function ceilNumbers() {
        $output = array();
    
        foreach($this->a as $n) {
            if ($n / sqrt( $n ) == $n) {
                $output[] = $n;
            }
        }
        if (count($output) == 0) {
            return 'Không có số chính phương nào trong mảng';
        }
        return $output;
    }

    public function sumArray() {
        return array_sum($this->a);
    }

    public function averageArray() {
        return $this->sumArray() / count($this->a);
    }

    public function biggerAverageArray() {
        $output = [];
        foreach($this->a as $v){
            if ($v > $this->averageArray()) {
                $output[] = $v;
            }
        }

        return $output;
    }
}
$ex2 = new Exercise2();
print_r($ex2->randomNumber(10)) ;echo '</pre>';
echo '<pre>';print_r($ex2->randomArray(10));echo '</pre>';
echo '<pre>';print_r($ex2->maxArray());echo '</pre>';
echo '<pre>';print_r($ex2->evenNumberMaxInArr());echo '</pre>';
echo '<pre>';print_r($ex2->randomArrayNew());echo '</pre>';
echo '<pre>';print_r($ex2->smallestOddNegativeNumber());echo '</pre>';
echo 'Tìm các số chính phương trong mảng.';echo '</pre>';
echo '<pre>';print_r($ex2->ceilNumbers());echo '</pre>';
echo '<pre>';print_r($ex2->sumArray());echo '</pre>';
echo '<pre>';print_r($ex2->averageArray());echo '</pre>';
echo '<pre>';print_r($ex2->biggerAverageArray());echo '</pre>';


//exercise 3
class Exercise3 {
    public $a = [];

    public function randomArray($n)
    {
        $a = [];
        for ($x = 1; $x <= $n; $x++) {
            $b = range(-10, 10);
            shuffle($b);
            $b = array_slice($b ,0, $n);

            array_push($a, $b);
        }
        $this->a = $a;

        return $a;
    }

    public function sumArray()
    {
        $output = [];
        foreach ($this->a as $val) {
            foreach($val as $v) {
                if ($v >= 0) {
                    $output[] = $v;
                }
            }
        }

        return array_sum($output);
    }

    public function sumArrayIndex()
    {
        $output = [];
        foreach ($this->a as $key => $val) {
            foreach($val as $k => $v) {
                if ($key + $k == 5) {
                    $output[] = $v;
                }
            }
        }

        return array_sum($output);
    }

}

$ex3 = new Exercise3();
echo '<pre>';print_r($ex3->randomArray(4)) ;echo '</pre>';
echo 'Tổng';echo '</pre>';
echo '<pre>';print_r($ex3->sumArray()) ;echo '</pre>';
echo 'Tổng index';echo '</pre>';
echo '<pre>';print_r($ex3->sumArrayIndex()) ;echo '</pre>';