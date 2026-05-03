<?php

class Karyawan {
  public $salary;
  public $years;

  public function __construct($salary, $years) {
    $this->salary = $salary;
    $this->years = $years;
  }
}

class Developer extends Karyawan {
    public function hitungBonus() {
        if ($this->years >= 10) {
            return $this->salary * 0.02;
        } elseif ($this->years > 1 && $this->years < 10) {
            return $this->salary * 0.01;
        } else {
            return 0;
        }
    }
}

class Manager extends Karyawan {
    public function hitungBonus() {
        return $this->salary * 0.5;
    }

    public function hitungTunjangan() {
        return $this->salary * 0.1;
    }
}

class Staff extends Karyawan {
    public $stock;
    public $price;

    public function __construct($salary, $years, $stock, $price) {
        parent::__construct($salary, $years);
        $this->stock = $stock;
        $this->price = $price;
    }

    public function hitungBonus() {
        if ($this->stock > 70) {
            return $this->price * 0.1 * $this->stock;
        } else {
            return $this->price * 0.03 * $this->stock;
        }
    }
}

$dataKaryawan = [
    ["nama" => "Ade", "salary" => 5000000, "years" => 12, "posisi" => "developer"],
    ["nama" => "Sisil", "salary" => 5000000, "years" => 5, "posisi" => "developer"],
    ["nama" => "Seti", "salary" => 5000000, "years" => 0, "posisi" => "developer"],
    ["nama" => "Ikhsan", "salary" => 5000000, "years" => 12, "posisi" => "manager"],
    ["nama" => "Deankt", "salary" => 5000000, "years" => 12, "stock" => 80, "posisi" => "staff"],
    ["nama" => "Luminair", "salary" => 5000000, "years" => 4, "stock" => 50, "posisi" => "staff"]
];

echo "<table border='1' cellpadding='3'>";
echo "<tr>
    <th>Nama</th>
    <th>Gaji</th>
    <th>Masa Kerja</th>
    <th>Jabatan</th>
    <th>Bonus/Tunjangan</th>
    <th>Total</th>
</tr>";

foreach ($dataKaryawan as $k) {
    echo "<tr>";
    echo "<td>{$k["nama"]}</td>";
    echo "<td>Rp " . number_format($k["salary"], 0, ',', '.') . "</td>";
    echo "<td>{$k["years"]} Tahun</td>";
    echo "<td>" . ucfirst($k["posisi"]) . "</td>";

    if ($k["posisi"] == "developer") {
        $obj = new Developer($k["salary"], $k["years"]);
        $bonus = $obj->hitungBonus();
        $total = $k["salary"] + $bonus;

        echo "<td>Rp " . number_format($bonus, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";

    } elseif ($k["posisi"] == "manager") {
        $obj = new Manager($k["salary"], $k["years"]);
        $extra = $obj->hitungBonus() + $obj->hitungTunjangan();
        $total = $k["salary"] + $extra;

        echo "<td>Rp " . number_format($extra, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";

    } elseif ($k["posisi"] == "staff") {
        $obj = new Staff($k["salary"], $k["years"], $k["stock"], 100000);
        $bonus = $obj->hitungBonus();
        $total = $k["salary"] + $bonus;

        echo "<td>Rp " . number_format($bonus, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";
    }

    echo "</tr>";
}
?>