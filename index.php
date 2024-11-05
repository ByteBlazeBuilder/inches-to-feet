<?php
define("SITE_URL", "http://localhost/inches-to-feet");
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
    <title>Inches to Feet Converter</title>
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

            <h1>Inches to Feet</h1>
            <p>Convert Inches to Feet Easily with Our User-Friendly Online Tool.</p>

        </hgroup>
        <article>
            <form>
                <label for="in">Inches (in):</label>
                <input type="number" id="inches" placeholder="inches" oninput="convertTofeet()" value="">

                <label for="feet">feet (ft):</label>
                <input type="number" id="feet" placeholder="feet" oninput="convertToInches()" value="">
            </form>
        </article>
        

        <h3>How to convert inches to feet?</h3>
        <p>The conversion factor from inches to feet is 0.0833</p>
        <p><strong>1 Inch = 0.0833 Feet (1 in = 0.0833 ft)</strong></p>
        <h4>Conversion of inches to feet</h4>
        
        <table>
            <tr>
                <th>Inches (in)</th>
                <th>Feet (ft)</th>
            </tr>
            <?php
            // Loop from 0 to 100 with a difference of 1 inch
            for ($inches = 1; $inches <= 100; $inches += 1) {
                $feet = $inches * "0.0833";
                $href = $inches."-inches-to-feet";
                echo "<tr>";
                echo "<td><a href=".$href.">".$inches." inches</td>";
                echo "<td>" . number_format($feet, 4) . " feet</td>";
                echo "</tr>";
            }
            
            // Loop from 105 to 1000 with a difference of 5 inches
            for ($inches = 105; $inches <= 1000; $inches += 5) {
                $feet = $inches * "0.0833";
                $href = $inches."-inches-to-feet";
                echo "<tr>";
                echo "<td><a href=".$href.">".$inches." inches</td>";
                echo "<td>" . number_format($feet, 4) . " feet</td>";
                echo "</tr>";
            }
            ?>
        </table>
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