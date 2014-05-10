<?php
/**
 * @var yii\web\View $this
 */
use yii\bootstrap\Carousel;

$this->title = 'Pame transport verhuisservice';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php
    $items = array(
        array(
            'content' => '<img src="http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg"/>',
            'options' => array('title' => 'Camposanto monumentale (inside)')
        ),
        array(
            'content' => '<img src="http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg"/>',
            'options' => array('title' => 'Hafsten - Sunset')
        ),
        array(
            'content' => '<img src="http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm8.static.flickr.com/7352/9477439317_901d75114a_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
        array(
            'content' => '<img src="http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_b.jpg"/>',
            'options' => array('title' => 'Sail us to the Moon')
        ),
    );

    echo Carousel::widget(['items'=> $items,'id'=>'mijn-carousel']);
    
    ?>
    </div>

    <div class="body-content">
        <div class="page-header h1">
    Pame transport verhuis service</div>
        <div class="row">
            <p>Pame verhuisservice is de verhuizer op maat.

    Of u nu 100 kg of 7.500 kg wilt vervoeren Pame regelt het voor u. 
    Indien nodig op (inter) nationaal niveau. De huurprijs is dan ook inclusief chauffeur. 
    Houdt u er wel rekening mee dat de chauffeur geen verhuizer is en enkel de vrachtwagen bestuurt 
    naar de lokatie van uw keuze. Verhuizers kunnen wel ingehuurd worden per persoon 20,25e per uur excl. btw.
            </p>
            <div class="page-header h4">Prijzen</div>
                
            
        </div>
        <div class="table-responsive"> 
    <table class="table table-striped">
            <tbody>
            <tr>
                <td>Auto vervoer: 300 kg maximaal inclusief chauffeur:</td>
                <td><ul><li>1 dag 80e na 100 km 0,25e per km</li>
                        <li>2 dagen 150e na 250 km  0,25 per km</li></ul></td>
            </tr>
            <tr>
                <td></td>
                <td><ul><li>1 dag 80e na 100 km 0,25e per km</li>
                        <li>2 dagen 150e na 250 km  0,25 per km</li></ul>
                </td>
            </tr>
            <tr>
                <td>Transport/verhuis wagen inclusief chauffeur nationaal: (3.500 kg)</td>
                <td><ul><li>1 dag 195e na 75 km 0,25e per km.</li>
                        <li>2 dagen 340 na 150 km 0,25e per km</li>
                        <li>3 dagen of langer i.o.</li></ul>
                </td>
            </tr>
            <tr>
                <td>Transport/verhuis wagen inclusief chauffeur nationaal (7.500 kg)</td>
                <td>
                    <ul><li>1 dag 250e na 100 km 0,25e per km.</li>
                        <li>2 dagen 400 na 200 km 0,25e per km</li>
                        <li>3 dagen of langer i.o.</li></ul> 
                </td>
            </tr>
            <tr>
                <td>
                    Internationaal: Transport/verhuiswagen inclusief chauffeur:
                </td>
                <td>
                    <ul><li>Gewicht tot 3500 kg in Europa 220e per 24 uur uur dit is inclusief inpak-overpak.</li> 
                        <li>Kilometers zijn in overleg. Reisdocumenten /visums/vergunningen dient uzelf  te regelen.</li></ul>
                </td>
            <tr>
                <td>Internationaal: Transport/verhuiswagen inclusief chauffeur:</td>
                <td>
                    <ul><li>Gewicht tot 7.500 kg in Europa 325e per 24 uur dit is inclusief inpak-overpak.</li> 
                        <li>Kilometers zijn in overleg. Reisdocumenten/visums/vergunningen dient uzelf  te regelen.</li></ul>

                </td>
            </tr>
            </tbody>
        </table>
            
        </div>
        

    </div>
</div>
