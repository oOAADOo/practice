<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<div class="flex-container">

	    <div class="header">
		    <?php include 'logo.inc.php' ?>
		    <?php include 'menu.inc.php' ?>
	    </div>

	    <div class="about_me">
            <h1 align="center"> <?php echo $p ?> </h1>
            <div class="data">
			    <div class="myImg">
			        <?php echo '<img src="img/set.png">';?>
			    </div>

                <div class="fullname">
			        <p> Меня зовут
			            <?php echo $name, ' ', '<br>', $surname . '<br>'; echo 'город ', ' ', $city; ?>
                    </p>

			        <p> Мне
			            <?php echo $age; ?>
			    лет </p>
			        <p> Мы научились создавать переменные, изучили простые операции с ними </p
			    </div>
                <div class="knowledge">
                    <?php include 'knowledge.inc.php'; ?>
                    <?php echo $a, ' ', $b, ' ', $c;?> <br>
                    <?php $a = 1; $b = 17; $c = $a + $b; echo $c;?> <br>
                    <?php echo $d;?>
                </div>
		    </div>
        </div><div class="article">
            <p class="text" align="center">
                weqdaswadsefdawdsfasdfadsfasdasdaaaaasdasdasdasdaczxczczcasdasdaxzxczczcsd
                asdasdadqwdaukczlhxhlsndyvslclszdhclshnlshzlsdczslkhzshzsasdasdasdsXCZXczc
                adldmcslssnlkflnnguslkuhnzchlkzhalsknlskhnefaconuawokfsdkfsrcghjgfbdvcxdvf
                sdjhcnkzjsbkssbkofgnskgcbfcskskfskcbegefweghfawgefwjgfjwhzcvxcxbcxvbdfgzwe
                weqdaswadsefdawdsfasdfadsfasdasdaaaaasdasdasdasdaczxczczczcxvbfngmbnfbdcfg
                asdasdadqwdaukczlhxhlsndyvslclszdhclshnlshzlsdczslkhzshzsvxbnbvhbgcvfvfvdf<br>
                adldmcslssnlkflnnguslkuhnzchlkzhalsknlskhnefaconuawokfsdksdfczdxzdcfdsdvsc
                sdjhcnkzjsbkssbkofgnskgcbfcskskfskcbegefweghfawgefwjgfjwhcsxvfdxdxccvdxfgd
                weqdaswadsefdawdsfasdfadsfasdasdaaaaasdasdasdasdaczxczczcsdfcvfvdcvcfvdccc
                asdasdadqwdaukczlhxhlsndyvslclszdhclshnlshzlsdczslkhzshzsCvfg vxfcsgcsgrgs
                adldmcslssnlkflnnguslkuhnzchlkzhalsknlskhnefaconuawokfsdkscfadssvrvvvsvxvs
                sdjhcnkzjsbkssbkofgnskgcbfcskskfskcbegefweghfawgefwjgfjwhkluynubvcdfmojoih
            </p>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>