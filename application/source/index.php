<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Convertisseur</title>
</head>

<body>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        $fromCurrency = $_POST['fromCurrency'];
        $toCurrency = $_POST['toCurrency'];

        $api_key = 'cf56b14e34cdd2e2974e1997';
        $api_url = "https://v6.exchangerate-api.com/v6/{$api_key}/latest/{$fromCurrency}";

        $response = file_get_contents($api_url);
        $data = json_decode($response, true);

        if ($data && isset($data['conversion_rates'][$toCurrency])) {
            $rate = $data['conversion_rates'][$toCurrency];
            $result = $rate * $amount;
            $resultMessage = '<p id="result">' .number_format($result, 2) . '<span id="currency">' . $toCurrency . '</span> </p>';
        } else {
            $resultMessage = 'Error retrieving exchange rate data from the API.';
        }
    }
    ?>

    <h1>
        <img src="images\Logo.webp" alt="logo - Global currencies">
    </h1>

    <div id="container">
        
        <div id="box">
            <p>
                <?php if (isset($resultMessage)) {
                    echo '<p id="entry"> <span id="right">' . $amount . '</span><span id="currency">' . $fromCurrency . '</span> </p>';
                    echo '<p> = </p>';
                    echo $resultMessage ;

                    echo '<p id="rate"> 1 ' . $fromCurrency . " = " . number_format($rate, 2) . " " . $toCurrency . '</p>';
                } ?>
            </p>

            <form method="post" action="">
                <label for="amount">Amount</label>
                <input class="" type="number" name="amount" value="<?php echo $amount; ?>" required>

                <div id="responsive">
                    <section class="flex">
                        <label for="fromCurrency">From</label>
                            <select name="fromCurrency">
                                <option value="USD" <?php echo (isset($fromCurrency) && $fromCurrency === 'USD') ? 'selected' : ''; ?>>USD 🇺🇸</option>
                                <option value="EUR" <?php echo (isset($fromCurrency) && $fromCurrency === 'EUR') ? 'selected' : ''; ?>>EUR 🇪🇺</option>
                                <option value="NGN" <?php echo (isset($fromCurrency) && $fromCurrency === 'NGN') ? 'selected' : ''; ?>>NGN 🇳🇬</option>
                                <option value="ZAR" <?php echo (isset($fromCurrency) && $fromCurrency === 'ZAR') ? 'selected' : ''; ?>>ZAR 🇿🇦</option> 
                                <option value="GHS" <?php echo (isset($fromCurrency) && $fromCurrency === 'GHS') ? 'selected' : ''; ?>>GHS 🇬🇭</option> 
                                <option value="KES" <?php echo (isset($fromCurrency) && $fromCurrency === 'KES') ? 'selected' : ''; ?>>KES 🇰🇪</option> 
                            </select>
                    </section>
            

                    <section class="flex">
                        <label for="toCurrency">To</label>
                        <select name="toCurrency">
                            <option value="USD" <?php echo (isset($toCurrency) && $toCurrency === 'USD') ? 'selected' : ''; ?>>USD 🇺🇸</option>
                            <option value="EUR" <?php echo (isset($toCurrency) && $toCurrency === 'EUR') ? 'selected' : ''; ?>>EUR 🇪🇺</option>
                            <option value="NGN" <?php echo (isset($toCurrency) && $toCurrency === 'NGN') ? 'selected' : ''; ?>>NGN 🇳🇬</option>
                            <option value="ZAR" <?php echo (isset($toCurrency) && $toCurrency === 'ZAR') ? 'selected' : ''; ?>>ZAR 🇿🇦</option> 
                            <option value="GHS" <?php echo (isset($toCurrency) && $toCurrency === 'GHS') ? 'selected' : ''; ?>>GHS 🇬🇭</option> 
                            <option value="KES" <?php echo (isset($toCurrency) && $toCurrency === 'KES') ? 'selected' : ''; ?>>KES 🇰🇪</option> 
                        </select>
                    </section>
                </div>
                
                    
                <input type="submit" id="submit" value="Convert">
            </form>
        </div>

        

    </div> 
            
</body>

</html>