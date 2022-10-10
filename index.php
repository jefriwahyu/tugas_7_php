<?php

    // membuat array angka
    $angka = [1,2,3,4,5,6,7,8,9,10];

    // membuat fungsi dengan perintah pencabangan switch
    function angka($number){
        switch($number){
        case 1:
            echo "Bilangan Ganjil";
            break;
        case 2:
            echo "Bilangan Genap";
            break;
        case 3:
            echo "Bilangan Ganjil";
            break;
        case 4:
            echo "Bilangan Genap";
            break;
        case 5:
            echo "Bilangan Ganjil";
            break;
        case 6:
            echo "Bilangan Genap";
            break; 
        case 7:
            echo "Bilangan Ganjil";
            break;
        case 8:
            echo "Bilangan Genap";
            break;
        case 9:
            echo "Bilangan Ganjil";
            break;
        case 10:
            echo "Bilangan Genap";
            break;   
        }
    }

?>

<!-- Menampilkan output dalam table -->
<h1>Tabel Bilangan</h1>
    <table border="1">
        <tr>
                <td>Bilangan</td>
                <td>Jenis</td>
        </tr>
        <tr>
                <td><?php echo "$angka[0]" ?></td>
                <td>
                <?php
                angka($angka[0]);
                ?>
                </td>
        </tr>
        <tr>
                <td><?php echo "$angka[1]" ?></td>
                <td>
                <?php
                angka($angka[1]);
                ?>
                </td>
        </tr>
        <tr>
                <td><?php echo "$angka[2]" ?></td>
                <td>
                <?php
                angka($angka[2]);
                ?>
                </td>
        </tr>
        <tr>
            <td><?php echo "$angka[3]" ?></td>
            <td>
                    <?php
                    angka($angka[3]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[4]" ?></td>
            <td>
                    <?php
                    angka($angka[4]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[5]" ?></td>
            <td>
                    <?php
                    angka($angka[5]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[6]" ?></td>
            <td>
                    <?php
                    angka($angka[6]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[7]" ?></td>
            <td>
                    <?php
                    angka($angka[7]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[8]" ?></td>
            <td>
                    <?php
                    angka($angka[8]);
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "$angka[9]" ?></td>
            <td>
                    <?php
                    angka($angka[9]);
                    ?>
            </td>
        </tr>
    </table>