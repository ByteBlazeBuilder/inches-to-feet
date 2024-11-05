<?php
// Extract the 'feet' value from the URL and sanitize it
$feet = isset($_GET['feet']) ? floatval($_GET['feet']) : 1; // Default to 1 foot if not set

// Perform the conversion
$inches = $feet * 12; // Convert feet to inches
$inchesRounded = round($inches, 0); // Round to the nearest whole number
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta property="og:image" content="/android-chrome-512x512.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> -->
    <link rel="manifest" href="/site.webmanifest">
    <title><?php echo $feet; ?> Feet to Inches | <?php echo $feet; ?> ft to in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
          }
    </style>
    <!-- developed by https://www.instagram.com/naresh.kumar.21/ -->
</head>

<body>
    <nav class="container">
        <ul>
            <li>
                <details role="list">
                    <summary aria-haspopup="listbox" role="link" class="secondary">Tools</summary>
                    <ul role="listbox" dir="rtl">
                        <li><a href="#">Age Calculator</a></li>
                        <li><a href="#">Date Calculator</a></li>
                        <li><a href="#">Date Time Calculator</a></li>
                        <li><a href="#">Hours Calculator</a></li>
                        <li><a href="#">Twitter Trends</a></li>
                        <li><a href="#">Youtube Trends</a></li>
                        <li><a href="#">Google Trends</a></li>
                        <li><a href="#">Emoji Copy Paste</a></li>
                        <li><a href="#">Word Finder</a></li>
                        <li><a href="#">IP Locator</a>
                        </li>
                        <li><a href="#">Typing</a></li>
                        <li><a href="#">kg to lbs</a></li>
                        <li><a href="#">miles to km</a></li>
                        <li><a href="#">feet to inches</a></li>
                    </ul>
                </details>
            </li>
            </li>
        </ul>
        <ul>
            <li><a href="javascript:void(0);" class="outline contrast glow" role="button"><small><mark>FEET TO INCHES</mark></small></a></li>
        </ul>
        <ul>
            <li>
                <details role="list" dir="rtl">
                    <summary aria-haspopup="listbox" role="link" class="secondary">Theme</summary>
                    <ul role="listbox">
                        <li><a href="#" data-theme-switcher="auto">Auto</a></li>
                        <li><a href="#" data-theme-switcher="light">Light</a></li>
                        <li><a href="#" data-theme-switcher="dark">Dark</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </nav>
    <hr/>
    <main class="container">
        <hgroup>
            <h1><?php echo $feet; ?> feet to inches</h1>
            <p><?php echo $feet; ?> feet equal to
                <mark>84 inches</mark>, To convert <?php echo $feet; ?> feet to inches, multiply <?php echo $feet; ?> by 12 or simply use below feet to inches online calculator tool.</p>
        </hgroup>
        <article>
            <form>
                <label for="feet">Feet (ft):</label>
                <input type="number" id="feet" placeholder="feet" oninput="convertToinches()" value="<?php echo $feet; ?>">

                <label for="inches">Inches (in):</label>
                <input type="number" id="inches" placeholder="inches" oninput="convertTofeet()" value="84">
            </form>
        </article>
        <article>
            <h3><?php echo $feet; ?> Feet to Inches converter. How many inches in <?php echo $feet; ?> feet?</h3>
            <p><?php echo $feet; ?> feet equal to
                <mark>84 inches</mark> or there are
                <mark>84 inches</mark> in <?php echo $feet; ?> feet.</p>
            <p>As we know, 1 foot is equal to 12 inches. We can convert feet to inches by multiplying with 12.</p>
            <p>
                <mark>1 foot = 12 inches</mark>
            </p>
            <p>
                <mark><?php echo $feet; ?> feet = <?php echo $feet; ?> x 12 = 84 inches</mark>
            </p>
            <p>Here are the some more examples for feet to inches conversion:</p>
            <ul>
                <?php
                // Generate a few example conversions from feet to inches
                for ($i = $feet.".1"; $i < $feet+1; $i += 0.1) {
                    $exampleInches = round($i * 12, 1); // 1 foot = 12 inches
                    echo "<li>$i feet = $exampleInches inches</li>";
                }
                ?>
            </ul>
        </article>
        <div class="grid">
            
            <article>
                <h3>feet to inches</h3>
                <ul>
                    <?php
                    $random_feet = array();
                    while (count($random_feet) < 13) {
                        $randValue = rand(1, 1000); // Generate random feet value between 1 and 1000

                        if (!in_array($randValue, $random_feet)) {
                            $random_feet[] = $randValue; // Add to the array if it's unique
                        }
                    }

                    sort($random_feet); // Sort the array of feet values

                    foreach ($random_feet as $feet) { ?>
                        <li><a href="<?php echo $feet; ?>-feet-to-inches"><?php echo $feet; ?> feet to inches</a></li>
                    <?php
                    }
                    ?>
                </ul>

            </article>
            <article>
                <h3>inches to feet</h3>
                <ul>
                    <?php
                    $random_inches = array();
                    while (count($random_inches) < 13) { 
                        $randValue = rand(1, 1000);

                        if (!in_array($randValue, $random_inches)) {
                            $random_inches[] = $randValue;
                        }
                    }

                    sort($random_inches);

                    foreach ($random_inches as $inches) { ?>
                        <li><a href=../<?php echo $inches ?>-inches-to-feet><?php echo $inches ?> inches to feet</a></li>
                    <?php
                    }
                    ?>
                </ul>

            </article>
        </div>
    </main>
    <hr/>
    <footer class="container-fluid" style="text-align:center" class="contrast">
        <p><small> © 2024 feet to inches converter</small></p>
    </footer>
    <script src="../assets/js/theme.js"></script>
    <script>
        function convertToinches() {
            const feet = parseFloat(document.getElementById("feet").value) || 0;
            const inches = feet * "12";
            document.getElementById("inches").value = inches.toFixed(6);
        }

        function convertTofeet() {
            const inches = parseFloat(document.getElementById("inches").value) || 0;
            const feet = inches / "12";
            document.getElementById("feet").value = feet.toFixed(6);
        }
    </script>
    <!-- developed by https://www.instagram.com/naresh.kumar.21/ -->
</body>

</html>