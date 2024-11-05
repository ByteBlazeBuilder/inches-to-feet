<?php
// Extract the 'inches' value from the URL and sanitize it
$inches = isset($_GET['inches']) ? floatval($_GET['inches']) : 1;

// Perform the conversion
$feet = $inches * 0.0833;
$feetRounded = round($feet, 4);
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
    <title><?php echo $inches ?> Inches to Feet</title>
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
        </ul>
        <ul>
            <li><a href="javascript:void(0);" class="outline contrast glow" role="button"><small><mark>INCHES TO FEET</mark></small></a></li>
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
                <h1><?php echo $inches; ?> Inches to Feet</h1>
                <p>
                    <?php echo $inches; ?> inches equal to
                        <mark>
                            <?php echo $feetRounded; ?> feet</mark>, To convert
                        <?php echo $inches; ?> inches to feet, multiply
                            <?php echo $inches; ?> by 0.0833 or simply use below inches to feet online calculator tool.</p>
            </hgroup>
            <article>
                <form>
                    <label for="in">Inches (in):</label>
                    <input type="number" id="inches" placeholder="inches" oninput="convertTofeet()" value="<?php echo $inches; ?>">

                    <label for="feet">feet (ft):</label>
                    <input type="number" id="feet" placeholder="feet" oninput="convertToInches()" value="<?php echo $feetRounded; ?>">
                </form>
            </article>
            <article>
                <h3><?php echo $inches; ?> Inches to Feet converter. How many feet in <?php echo $inches; ?> inches?</h3>
                <p>
                    <?php echo $inches; ?> inches equal to
                        <mark>
                            <?php echo $feetRounded; ?> feet</mark> or there are
                        <mark>
                            <?php echo $feetRounded; ?> feet</mark> in
                        <?php echo $inches; ?> inches.</p>
                <p>As we know, 1 inch is equal to 0.0833 feet. We can convert inches to feet by multiplying with 0.0833.</p>
                <p>
                    <mark>1 inch = 0.0833 feet</mark>
                </p>
                <p>
                    <mark>
                        <?php echo $inches; ?> inches =
                            <?php echo $inches; ?> x 0.0833 =
                                <?php echo $feetRounded; ?> feet</mark>
                </p>
                <p>Here are some more examples for inches to feet conversion:</p>
                <ul>
                    <?php
                    // Generate a few example conversions
                    for ($i = $inches.".1"; $i < $inches+1; $i += 0.1) {
                        $exampleFeet = round($i * 0.0833, 5);
                        echo "<li>$i inches = $exampleFeet feet</li>";
                    }
                    ?>
                </ul>
            </article>


            <div class="grid">
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
                            <li><a href=<?php echo $inches ?>-inches-to-feet><?php echo $inches ?> inches to feet</a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </article>
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
                            <li><a href="feet-to-inches/<?php echo $feet; ?>-feet-to-inches"><?php echo $feet; ?> feet to inches</a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </article>
            </div>

        </main>
        <hr/>
        <footer class="container-fluid" style="text-align:center" class="contrast">
            <p><small> © 2024 inches to feet converter</small></p>
        </footer>
        <script src="assets/js/theme.js"></script>
        <script>
            function convertTofeet() {
                const inches = parseFloat(document.getElementById("inches").value) || 0;
                const feet = inches * "0.0833";
                document.getElementById("feet").value = feet.toFixed(4);
            }
    
            function convertToInches() {
                const feet = parseFloat(document.getElementById("feet").value) || 0;
                const inches = feet / "0.0833";
                document.getElementById("inches").value = inches.toFixed(4);
            }
        </script>
    <!-- developed by https://www.instagram.com/naresh.kumar.21/ -->
</body>

</html>