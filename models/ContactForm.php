<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $datum;
    public $aantal_dagen;
    public $adres;
    public $postcode;
    public $plaats;
    public $starttijd;
    public $telefoon;
    public $text;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Naam',
            'subject' => 'Onderwerp',
            'body' => 'Bericht',
            'verifyCode' => 'Verificatie Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        $extrabody = 'Datum: '.$this->datum."\n".
                'Aantal dagen: '. $this->aantal_dagen."\n".
                'Adres: '.$this->adres."\n";
                'Postcode: '. $this->postcode."\n".
                'Plaats: '.$this->plaats."\n".
                'Starttijd: '. $this->starttijd."\n".
                'Telefoon: '.$this->telefoon;
                
        
        if ($this->validate()) {
            Yii::$app->mail->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body.$extrabody)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
