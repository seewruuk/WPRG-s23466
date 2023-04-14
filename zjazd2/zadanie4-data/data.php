<?php
    $birthdate = $_GET['birthdate'];

    if (!empty($birthdate)) {
        $birthdateArr = getdate(strtotime($birthdate));
        $dayOfWeek = $birthdateArr['weekday'];
        switch($dayOfWeek){
            case 'Monday':
                $dayOfWeek = 'Poniedziałek';
                break;
            case 'Tuesday':
                $dayOfWeek = 'Wtorek';
                break;
            case 'Wednesday':
                $dayOfWeek = 'Środa';
                break;
            case 'Thursday':
                $dayOfWeek = 'Czwartek';
                break;
            case 'Friday':
                $dayOfWeek = 'Piątek';
                break;
            case 'Saturday':
                $dayOfWeek = 'Sobota';
                break;
            case 'Sunday':
                $dayOfWeek = 'Niedziela';
                break;
        }
            
        $today = getdate();
        $age = $today['year'] - $birthdateArr['year'];
        $nextBirthday = getdate(mktime(0, 0, 0, $birthdateArr['mon'], $birthdateArr['mday'], $today['year']+1));
        $daysToNextBirthday = $nextBirthday[0] - $today[0];
        $daysToNextBirthday = floor($daysToNextBirthday / (60 * 60 * 24));

        echo "<p>Urodziłeś się w dniu tygodnia: $dayOfWeek</p>";
        echo "<p>Ukończyłeś/aś $age lat</p>";
        echo "<p>Do najbliższych przyszłych urodzin pozostało $daysToNextBirthday dni</p>";
    } else {
        echo "<p>Proszę wybrać datę urodzenia.</p>";
    }

    ?>