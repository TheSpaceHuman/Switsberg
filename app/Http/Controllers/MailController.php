<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutFeedbackRequest;
use App\Http\Requests\ContactFeedbackRequest;
use App\Jobs\SendAboutFeedbackJob;
use App\Jobs\SendContactFeedbackJob;
use Illuminate\Http\Request;

class MailController extends Controller
{
  public function contactFeedback(ContactFeedbackRequest $request)
  {
//    $this->validated();

    dispatch(new SendContactFeedbackJob());

    $request->session()->flash('success-message', 'Сообщение успешно отправлено');

    return back();
  }

  public function aboutFeedback(AboutFeedbackRequest $request)
  {
//    $this->validated();

    dispatch(new SendAboutFeedbackJob());

    $request->session()->flash('success-message', 'Сообщение успешно отправлено');

    return back();
  }
}
