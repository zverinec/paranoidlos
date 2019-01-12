<?php
require_once __DIR__ . '/vendor/autoload.php';

$alphabets = [
    0 => [
        'a' => 'a',
        'b' => 'b',
        'c' => 'c',
        'd' => 'd',
        'e' => 'e',
        'f' => 'f',
        'g' => 'g',
        'h' => 'h',
        'i' => 'i',
        'j' => 'j',
        'k' => 'k',
        'l' => 'l',
        'm' => 'm',
        'n' => 'n',
        'o' => 'o',
        'p' => 'p',
        'q' => 'q',
        'r' => 'r',
        's' => 's',
        't' => 't',
        'u' => 'u',
        'v' => 'v',
        'w' => 'w',
        'x' => 'x',
        'y' => 'y',
        'z' => 'z',
    ],
    1 => [
        "a"=>".-",
        "b"=>"-...",
        "c"=>"-.-.",
        "d"=>"-..",
        "e"=>".",
        "f"=>"..-.",
        "g"=>"--.",
        "h"=>"....",
        "i"=>"..",
        "j"=>".---",
        "k"=>"-.-",
        "l"=>".-..",
        "m"=>"--",
        "n"=>"-.",
        "o"=>"---",
        "p"=>".--.",
        "q"=>"--.-",
        "r"=>".-.",
        "s"=>"...",
        "t"=>"-",
        "u"=>"..-",
        "v"=>"...-",
        "w"=>".--",
        "x"=>"-..-",
        "y"=>"-.--",
        "z"=>"--..",
    ],
    2 => [
        'a' => '.',
        'b' => '-',
        'c' => '..',
        'd' => '.-',
        'e' => '-.',
        'f' => '--',
        'g' => '...',
        'h' => '..-',
        'i' => '.-.',
        'j' => '.--',
        'k' => '-..',
        'l' => '-.-',
        'm' => '--.',
        'n' => '---',
        'o' => '....',
        'p' => '...-',
        'q' => '..-.',
        'r' => '..--',
        's' => '.-..',
        't' => '.-.-',
        'u' => '.--.',
        'v' => '.---',
        'w' => '-...',
        'x' => '-..-',
        'y' => '-.-.',
        'z' => '-.--',
    ],
    3 => [
        'a' => '..',
        'b' => '.--.',
        'c' => '--.',
        'd' => '---',
        'e' => '.',
        'f' => '.---',
        'g' => '-...',
        'h' => '.-..',
        'i' => '.-',
        'j' => '.-.-',
        'k' => '-.-',
        'l' => '-..',
        'm' => '...-',
        'n' => '-.',
        'o' => '-',
        'p' => '....',
        'q' => '-.--',
        'r' => '..-',
        's' => '...',
        't' => '--',
        'u' => '.--',
        'v' => '.-.',
        'w' => '-.-.',
        'x' => '-..-',
        'y' => '..--',
        'z' => '..-.',
    ],
    4 => [
        'a' => '-..',
        'b' => '-..-',
        'c' => '.---',
        'd' => '--.',
        'e' => '..',
        'f' => '---',
        'g' => '....',
        'h' => '...-',
        'i' => '..-',
        'j' => '..-.',
        'k' => '..--',
        'l' => '.-..',
        'm' => '-.--',
        'n' => '-.-.',
        'o' => '.-.',
        'p' => '.--',
        'q' => '.',
        'r' => '.-',
        's' => '-.-',
        't' => '-.',
        'u' => '...',
        'v' => '-...',
        'w' => '-',
        'x' => '.--.',
        'y' => '.-.-',
        'z' => '--',
    ]
];
// morse
// abecedni morse
// cesta frekvencka
// qwertz
$code = 's tri';
$title = 'S3 Systematická';
$password = 'demokracie';

$prompts = [
    0 => 'Ahoj, ja jsem los Bjarte, ale ostatni mi rikaji ParanoioS...',
    1 => 'Kdo jste vy?',
    2 => 'Ahoj tyme %s! Vitam te u ulohy '. $code . '... dostal jsem za ukol ti sdelit heslo, ale nekdo by nas mohl odposlouchavat, prejdeme radeji na nejaky kod. Napadl me jeden, ktery zna kazdy namornik.',
    3 => 'Super, vidim ze uz pises v morseovce, ale pro jistotu mi napis slovo otaznik.',
    4 => 'Hura, mame ustanovenou komunikaci, aby rec nestala vis ze ma druha prezdivka je ABCDOS? Kdyz jsem byl mensi strasne rad jsem vytvarel sve alternativy vseho ktere byly systematicky preskladane podle abecedy. No kazdopadne mam pocit ze nas odposlouchavaji, pojdme si vytvorit novy kod. Napis mi v nem slovo hruska.',
    5 => 'Sladka hruska, uplne jsem na ni dostal chut. Mimochodem, vedeli jste ze morseovka odpovida frekvenci vyskytu pismen v anglictine, aby zpravy byly co nejkratsi. Cool tabulka, mrkej na algoritmy tecka net, jen tak premyslim ze v cestine by se asi musela secist cetnost znaku s diakritikou dohromady hmm a ch vlastne zapocitam dvakrat. Vis co, pouzijme novy kod, stejne nas uz zase odposlouchavaji, hned jak napises slovo svihak, budu vedet ze jsme zase na jedne lodi.',
    6 => 'Trochu ti to zabralo, ze? Ja se mezitim nudil, takze jsem si naprogramoval vlastni rozlozeni klavesnice, ale musim rict to vychozi ceske je stejne nejlepsi, miluji Q, takze sorry za jeste jednu zmenu kodovani, tentokrat napis paranoik.',
    7 => 'No moc jsme si nepopovidali, ale uz se na me vali dalsi tymy, tedy heslo teto ulohy je ' . $password,
    8 => 'Hele, stejne nas odposlouchavaji, radsi to tu smazme.'
];

$wrongs = [
    'unknown_team' => ['Neznam tym takoveho jmena', 'To nezni moc jako Interlosi tym.', 'Divny nazev tymu, jste vlastne vubec zaregistrovani?'],
    'no_morse' => 'To neni ono, pojdme zacit pouzivat ten znamy kod, tenhle musis znat.',
    'misunderstanding' => 'Tomu jsem nerozumel.',
    'no_password' => 'Tohle neni to spravne slovo. Zkus to znovu.',
];

$teams = explode("\n", file_get_contents('teams.csv'));
$teamsLowered = array_map('mb_strtolower', $teams);
$teamsLoweredStripped = array_map('stripMessage', $teamsLowered);

$guards = [
    1 => function ($plaintext) use ($teamsLoweredStripped, $teamsLowered, $teams, $prompts, $wrongs) {
        if (in_array(trim(mb_strtolower($plaintext)), $teamsLowered, true) || in_array(stripMessage(trim(mb_strtolower($plaintext))), $teamsLoweredStripped, true)) {
            return [true, false, stripMessage(sprintf($prompts[2], stripMessage($plaintext)))];
        }
        return [false, false, stripMessage($wrongs['unknown_team'][array_rand($wrongs['unknown_team'], 1)])];
    },
    2 => function ($plaintext, $original) use (&$currentAlphabet, $wrongs, $prompts) {
        if (!isInMorse($original)) {
            return [false, false, stripMessage($wrongs['no_morse'])];
        }
        return [true, true, stripMessage($prompts[3])];
    },
    3 => function ($plaintext, $original) use (&$currentAlphabet, $wrongs, $prompts) {
        if (str_replace(' ', '', $plaintext) !== 'otaznik') {
            return [false, false, stripMessage($wrongs['no_password'])];
        }
        return [true, true, stripMessage($prompts[4])];
    },
    4 => function ($plaintext, $original) use (&$currentAlphabet, $wrongs, $prompts) {
        if (str_replace(' ', '', $plaintext) !== 'hruska') {
            return [false, false, stripMessage($wrongs['no_password'])];
        }
        return [true, true, stripMessage($prompts[5])];
    },
    5 => function ($plaintext, $original) use (&$currentAlphabet, $wrongs, $prompts) {
        if (str_replace(' ', '', $plaintext) !== 'svihak') {
            return [false, false, stripMessage($wrongs['no_password'])];
        }
        return [true, true, stripMessage($prompts[6])];
    },
    6 => function ($plaintext, $original) use ($wrongs, $prompts) {
        if (str_replace(' ', '', $plaintext) !== 'paranoik') {
            return [false, false, stripMessage($wrongs['no_password'])];
        }
        return [true, false, stripMessage($prompts[7])];
    },
    7 => function ($plaintext, $original) use ($wrongs, $prompts) {
        return [true, false, stripMessage($prompts[8])];
    }
];

// Application

$requestFactory = new \Nette\Http\RequestFactory();
$response = new \Nette\Http\Response();
$session = new \Nette\Http\Session($requestFactory->createHttpRequest(), $response);
$section = $session->getSection('messages');
$session->start();
$messages = $section->offsetGet('messages');
$currentAlphabet = $section->offsetGet('currentAlphabet');
$currentLevel = $section->offsetGet('currentLevel');

$currentAlphabet = !$currentAlphabet ? 0 : $currentAlphabet;
$currentLevel = !$currentLevel ? 1 : $currentLevel;

if (!$messages) {
    $messages[] = [date('j. m. Y H:i:s'), 'Bjarte', stripMessage($prompts[0])];
    $messages[] = [date('j. m. Y H:i:s'), 'Bjarte', stripMessage($prompts[1])];
}
$form = new \Nette\Forms\Form();
$form->addText('message', 'Zpráva:', 100)
    ->setAttribute('autofocus', 'true');
$form->addSubmit('send', 'Odeslat');

$redirect = false;

$form->onSuccess[] = function (\Nette\Forms\Form $form, $values) use (
    $alphabets,
    &$currentAlphabet,
    &$currentLevel,
    $guards,
    &$messages,
    &$redirect
) {
    // Always add user input
    $messages[] = [date('j. m. Y H:i:s'), 'Vy', $values->message];
    // Add evaluation
    if (isset($guards[$currentLevel])) {
        $sanitized = $currentAlphabet === 0 ? stripMessage($values->message) : fromAlphabet(stripMessageMorse($values->message), $currentAlphabet, $alphabets);
        list($status, $levelUp, $message) = $guards[$currentLevel]($sanitized, $values->message);
        if ($currentLevel === 2 && $levelUp) {
            $finalMessage = toAlphabet($message, 1, $alphabets);
        } else {
            $finalMessage = $currentAlphabet === 0 ? $message : toAlphabet($message, $currentAlphabet, $alphabets);
        }
        if ($status) {
            $currentLevel++;
        }
        if ($levelUp) {
            $currentAlphabet++;
        }
        $messages[] = [date('j. m. Y H:i:s'), 'Bjarte', $finalMessage];
    }
    $redirect = true;
};
$form->fireEvents();

// Storing output
$section->offsetSet('messages', $messages);
$section->offsetSet('currentLevel', $currentLevel);
$section->offsetSet('currentAlphabet', $currentAlphabet);

if ($redirect) {
    header('Location: index.php');
    exit;
}

// Output
echo <<<EOT
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <title>$title</title>
    <style>body, input { font-family: "Trebuchet MS"; font-size: 1.2em; } form { margin-top: 1cm; }</style>
  </head>
  <body>
EOT;

foreach ($messages as list($time, $who, $message)) {
    echo $time . ' [' .  $who . ']: ' . $message . "<br>\n";
}
echo $form;

echo <<<EOT
</body>
</html>
EOT;

if (isset($_GET['reset']) || $currentLevel === 8) {
    session_destroy();
}

/// functions

function stripMessage($input)
{
    $input = iconv('UTF-8', 'ASCII//TRANSLIT', $input);
    return mb_strtolower(preg_replace('#[^a-zA-Z ]#', '', $input));
}
function stripMessageMorse($input)
{
    $input = iconv('UTF-8', 'ASCII//TRANSLIT', $input);
    $input = str_replace('|', ' ', $input);
    return mb_strtolower(preg_replace('#[^\-\. ]#', '', $input));
}
function isInMorse($input)
{
    return (bool) preg_match('#^[\.\- ]+$#', $input);
}
function toAlphabet($input, $currentAlphabet, $alphabets) {
    return array_reduce(str_split($input), function($carry, $item) use (
        $currentAlphabet,
        $alphabets)
    {
        $table = $alphabets[$currentAlphabet];
        // Get the correspondent value for the given letter
        $morse = isset($table[$item]) ? $table[$item] . ' ' : ' ';
        // Return the string with appended morse character
        return $carry . $morse;
    });
};
function fromAlphabet($input, $currentAlphabet, $alphabets) {
    return array_reduce(explode(' ', $input), function($carry, $item) use (
        $currentAlphabet,
        $alphabets)
    {
        $table = array_flip($alphabets[$currentAlphabet]);
        // Get the correspondent value for the given letter
        $morse = $table[$item] ?? ' ';
        // Return the string with appended morse character
        return $carry . $morse;
    });
};