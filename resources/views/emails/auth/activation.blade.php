@component('mail::message')
# Account Activation

Thank you for register in Demion. Please activate your account by click on the button.

@component('mail::button', ['url' => route('auth.activate', [
									'token' => $user->activation_token,
									'email' => $user->email
									])
							]
			)
	Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
