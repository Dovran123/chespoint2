
<?php
class titul {
    private $id ;
    private $meno;
    private $nazov;
    private $subor ;
    private $text;
    private $titulok;
    private $datum;
    private $typ;
    private $tag;


    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSubor()
    {
        return $this->subor;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getTitulok()
    {
        return $this->titulok;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @return mixed
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno)
    {
        $this->meno = $meno;
    }

    /**
     * @param mixed $subor
     */
    public function setSubor($subor)
    {
        $this->subor = $subor;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param mixed $titulok
     */
    public function setTitulok($titulok)
    {
        $this->titulok = $titulok;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @param mixed $typ
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov)
    {
        $this->nazov = $nazov;
    }

    /**
     * @param mixed $typ
     * @return titul
     */

}
class blog
{
    private $i=0;
    private $myArr;

    public function __construct()
    {

        $this->spojenia();
    }
    function zostrojenie()
    {
         for ($j = 0; $j < $this->i ; $j++ ) {
                $novy = $this->myArr[$j];
        ?>
         <div class="nic"><h1> <?php echo $novy->getTitulok() ?></h1> </div>
        <div class="obrazok-blok"><img src="upload/<?php echo $novy->getSubor() ?>" alt=""></div>
        <div class="text-blok" style="padding-left: 5%; padding-right: 5%;">
            <div class="container">
               <p><?php echo $novy->getText() ?></p>
            </div>

        </div>
        <div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
            <div class="container">
                <div class="ohranicenie">
                    <h1 class="joing">Want to join the Stratford family?</h1>
                    <a href="Contak.php" class="tlacidlo">GET IN TOUCH!</a>

                </div>
                <div class="pouzivatel">
                    <ul>
                        <li><img src="obrazky/blog/ikonky/user-fill.png" alt="png"> <p><?php echo $novy->getMeno() ?></p></li>
                        <li><img src="obrazky/blog/ikonky/time-fill.png" alt="png"> <p><?php echo $novy->getDatum() ?></p></p></li>
                        <li><img src="obrazky/blog/ikonky/folder-fill.png" alt="png"> <p><?php echo $novy->getTyp() ?></p></li>
                        <li><img src="obrazky/blog/ikonky/price-tag-3-fill.png" alt="png"> <p><?php echo $novy->getTag() ?></p></li>
                    </ul>
                </div>

            </div>
        <?php }
    }
    function spojenia()
    {
        include "config.php";


        $sqly = mysqli_query($db,"SELECT * from blog ");

        if ( $sqly->num_rows > 0) {
        $this->i =0;

            while($row =  $sqly->fetch_assoc()) {
                $novy = new titul();
                $novy->setId($row["id"]) ;
                $novy->setTitulok($row["Nazov"] ) ;
                $novy->setSubor($row["imageurl"] ) ;
                $novy->setTag($row["tag"] ) ;
                $novy->setTyp($row["typ"] ) ;
                $novy->setDatum($row["datum"]);
                $novy->setMeno($row["Meno"]);
                $novy->setText($row["text"]);
                $this->myArr[$this->i ]=(object) $novy;
                $this->i++;
            }
        } else {
            $this->titulok = "0 results";
        }

}
function vypisanie() {

    for ($j = 0; $j < $this->i ; $j++ ) {
          $novy = $this->myArr[$j];
            $anchor = $novy->getTitulok();
          ?>
            <tr>
            <td id=""> <?php echo $novy->getId(); ?></td>
            <td> <?php echo $novy->getTitulok(); ?></td>
            <td> <a style="color: green" onclick="spustenieedit('<?php echo $novy->getId();?>',' <?php echo $anchor?>',' <?php  echo $novy->getMeno()?>',' <?php echo $novy->getSubor()?>' ,'<?php echo $novy->getTag()?>' ,'<?php echo $novy->getTyp()?>' ,'<?php  echo $novy->getText()?>')"  class="velkost"><i  class="far fa-edit"></i></a>
            <a href="adminlog/delete.php?id=<?php echo $novy->getId();?>"  onclick="return confirm('Chceš to vymazať')" style="color: red" id="<?php echo $novy->getId(); ?>" class="velkost"   > <i class="fas fa-trash"></i></a> </td>
            </tr>
        <?php
            }
}/**
 * @return mixed
 */public  function getMyArr(){
    return $this->myArr;
}/**
 * @param mixed $myArr
 */public  function setMyArr($myArr){
    $this->myArr = $myArr;
}
}
?>