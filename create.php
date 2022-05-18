<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujas įrašas</title>
    <link rel="stylesheet" type="text/css" href="css/create.css">
</head>
<body>
    <header>
        <nav>
            <ul>
			<br>
                <li><a href="search.php">Paieška</a></li>
				<br>
                <li><a href="index.php">Visi įrašai</a></li>
				<br>
                <li><a href="#create">Sukurti įrašą</a></li>
				<br>
                <li><a href="logout.php">Atsijungti</a></li>
            </ul>
        </nav>
    </header>
    <div>
       
    </div>
    <div>
        <form action="includes/insert.php" method="POST">
            <input type="text" name="disable" id="disable">
            <pre></pre>
            <input type="text" name="Name" id="Name" placeholder="Pavadinimas">
            <pre></pre>
            <input type="date" name="Date">
            <pre></pre>
            <select value="Type" name="Type" id="Type">
                <option value="Name" disabled selected hidden>Kategorijos</option>
                <option value="USB">USB laikmenos</option>
                <option value="Plokstes">Plokštės</option>
                <option value="RAM">RAM</option>
                <option value="Tinklas">Tinklas</option>
                <option value="Laidai">Laidai</option>
                <option value="HDD">HDD</option>
                <option value="SSD">SSD</option>
                <option value="Kompiuteriai">Kompiuteriai</option>
                <option value="Monitoriai">Monitoriai</option>
                <option value="Video">Video aparatūra</option>
                <option value="Audio">Audio aparatūra</option>
                <option value="Ivestis">Įvesties įrenginiai</option>
                <option value="Komunikacija">Komunikacija</option>
                <option value="Kiti">Kiti</option>
            </select>
            <pre></pre>
            <label>Kaina su PVM </label>
            <input type="number" name="WithPVM" id="" step="0.01" pattern="[0-9]+([\,][0-9]+)?" min="0.01" max="9999">
            <pre></pre>
            <label>Kaina be PVM </label>
            <input type="number" name="NoPVM" id="" step="0.01" pattern="[0-9]+([\,][0-9]+)?" min="0.01" max="9999">
            <pre></pre>
            <label>Kiekis </label> 
            <input type="number" name="Count" id="" min="1" max="9999" style="width: 40px">
            <label> Matavimo vienetai</label> 
            <select name="Size" id="Size"> 
                <option value="vnt">vnt.</option>
                <option value="m">m</option>
                <option value="kg">kg</option>
                <option value="rite">ritė</option>
            </select>
            <pre></pre>
            <label>Gamyklinis Nr:</label> <input type="text" name="Number" id="">
            <pre></pre>
            <label>Paskirtis:</label>
            <select value="Location" name="Location" id="Location">
                <option value="VIKO">VIKO</option>
                <option value="EIF">EIF</option>
                <option value="ATF">ATF</option>
                <option value="EKF">EKF</option>
                <option value="MTF">MTF</option>
                <option value="PDF">PDF</option>
                <option value="VVF">VVF</option>
                <option value="SPF">SPF</option>
            </select>
            <pre></pre>
            <label>Sąskaita faktūra: </label>
            <input type="Invoice" name="Invoice" id="Invoice">
            <pre></pre>
            <label>Paskirtis (plačiai)</label>
            <pre></pre>
            <input type="text" name="Purpose" id="" size="36">
            <pre></pre>
            <button type="submit" name="create" value="create">Kurti</button>
            <button type="reset" name="reset">Ištrinti</button>
        </form>
    </div>
    <main>  
        <p> Kilus klausimams rašyti <a href="mailto:r.piekus@viko.lt"> r.piekus@viko.lt </a> arba <a href="mailto:v.liubinas@viko.lt"> v.liubinas@viko.lt</a></p>
    </main>
</body>
</html>
