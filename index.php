<?php 

class Moovie {
    public $title;
    public $genre;
    public$director;
    public$year;


    public function __construct($title, $genre, $director ,$year)
	{
		$this->title = $title;
		$this->genre = $genre;
        $this->director = $director;
        $this->year = $year;
	}
    
	public function moovieInfo()
	{
		return "Titolo: ".$this->title . ", genere: ".$this->genre . " Regista/i: ".$this->director . " Anno di uscita: ".$this->year;
	}
}

$film1 = new Moovie("Titanic", "Drammatico", "James Cameron", "1997");

$film2 = new Moovie("Il Signore degli Anelli, la compagnia dell'anello", "Fantasy", "Peter Jackson","2001");

$film3 = new Moovie("Rapunzel", "Animazione","Nathan Greno, Byron Howard", "2010");

echo $film1->moovieInfo()."<br>";
echo $film2->moovieInfo()."<br>";
echo $film3->moovieInfo()."<br>";

?>