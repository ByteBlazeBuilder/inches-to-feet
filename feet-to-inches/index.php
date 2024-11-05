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
    <title>ft to in (Feet to Inches) Converter</title>
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

            <h1>feet to Inches (ft to in)</h1>
            <p>Convert feet to Inches Easily with Our User-Friendly Online Tool.</p>

        </hgroup>
        <article>
            <form>
                <label for="inches">Feet (ft):</label>
                <input type="number" id="feet" placeholder="feet" oninput="convertToinches()" value="">

                <label for="feet">Inches (in):</label>
                <input type="number" id="inches" placeholder="inches" oninput="convertTofeet()" value="">
            </form>
        </article>

        <h3>How to convert feet to inches?</h3>
        <p>The conversion factor from feet to inches is 12</p>
        <p><strong>1 Foot = 12 Inches (1 foot = 12 inches)</strong></p>
        <h4>Conversion of feet to inches</h4>
        
        <table>
            <tr>
                <th>Feet (ft)</th>
                <th>Inches (in)</th>
            </tr>
            <?php
            // Loop from 1 to 100 feet
            for ($feet = 1; $feet <= 100; $feet += 1) {
                $inches = $feet * 12; // Convert feet to inches
                $href = $feet."-feet-to-inches"; // Create dynamic URL
                echo "<tr>";
                echo "<td><a href='$href'>$feet feet</a></td>"; // Correctly formatted href
                echo "<td>" . number_format($inches, 0) . " inches</td>"; // Display inches without decimals
                echo "</tr>";
            }

            // Loop from 105 to 1000 feet with a difference of 5 feet
            for ($feet = 105; $feet <= 1000; $feet += 5) {
                $inches = $feet * 12; // Convert feet to inches
                $href = $feet."-feet-to-inches"; // Create dynamic URL
                echo "<tr>";
                echo "<td><a href='$href'>$feet feet</a></td>"; // Correctly formatted href
                echo "<td>" . number_format($inches, 0) . " inches</td>"; // Display inches without decimals
                echo "</tr>";
            }


            // Loop from 1001 to 10000 feet with a difference of 5 feet
            for ($feet = 1050; $feet <= 10000; $feet += 50) {
                $inches = $feet * 12; // Convert feet to inches
                $href = $feet."-feet-to-inches"; // Create dynamic URL
                echo "<tr>";
                echo "<td><a href=".$href.">".$feet." feet</a></td>"; // Correctly formatted href
                echo "<td>" . number_format($inches, 0) . " inches</td>"; // Display inches without decimals
                echo "</tr>";
            }
            ?>
        </table>

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