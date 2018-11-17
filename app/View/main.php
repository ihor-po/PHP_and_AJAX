<?php

require_once 'layout/header.php';

switch ($_GET['page'])
{
    case 'textColor':
        include ('../../public/assets/js/textColor.js');
        require_once ('textColor.php');
        break;
    case 'calendar':
        require_once ('calendar.php');
        break;
    default:
        require_once ('start.php');
        break;
}

?>

<?php

require_once 'layout/footer.php';
