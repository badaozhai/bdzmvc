<?php 

class HomeController extends BaseController
{
  
  public function home()
  {
      $this->view = View::make('home')->with('article',Article::first())

          ->withTitle('MFFC :-D');

  }
    public function mail(){
        $mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])

            ->from('MotherFucker <ooxx@163.com>')

            ->title('Fuck Me!')

            ->content('<h1>Hello~~</h1>');

        if ( $mail instanceof Mail ) {

            $mailer = new Nette\Mail\SmtpMailer($mail->config);

            $mailer->send($mail);

        }
    }
    public function redistest(){
        Redis::set('key','hello,world',5,'s');

        echo Redis::get('key');
    }
}
