<?php
    if(isset($_GET['num']))
    {
        if($_GET['num'] == '37')
            echo "BajigurCTF{tebakan_anda_berhasil}";
        else
            echo "Jawaban Salah";
    }
    else
        echo "Usage: /?num=";