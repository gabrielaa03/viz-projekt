
<? php
$host = "127.0.0.1";
$user = "azure";
$pwd = "6 #vwhd _ $";
$db = "localdb";

// database=localdb; data source= 127.0.0.1:56044; korisnik id=azure; zaporkom 6 #vwhd _ $
// povezati s bazom podataka.
Probaj {
$conn = new izvornosti (" mysql:host=$host;dbname=$db", $user, $pwd);
$conn->setattribute izvornosti ( :: zgodna _ errmode, izvornosti :: errmode _ izuzetak);
}
Uhvatiti (izuzetak $e) {
Umrijeti (bio _ ispiši ($e));
}

$sql _ stvori = " stvoriti stol registracija _ tpm (id int ne nevažeæim
Automatski _ poveæanju, primarni kljuè (id), ime varchar (30), e-mail
Varchar (30), spoj);
";

$stmt = $conn->prepare ($sql _ stvori);

$stmt->execute ();

?>