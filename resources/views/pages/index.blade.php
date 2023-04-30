@extends('layouts.default')

@section('content')

<div class="contaner">
  <div class="py-5 container">
    <div class="row mx-0">
      <div class="col-md-6 order-2">
        <div class="container">
          <h2 class="navy-text py-4 fw-bolder">EMAIL & OTP VERIFICATION API</h2>
          <p class="">
            Our platform offers a secure and reliable way to verify the identity of your users.
            We understand the importance of keeping your
            user data safe, and our robust verification system ensures that only legitimate users can access your platform.
          </p>
          <button class="btn navy-btn text-white">Get Started</button>
        </div>
      </div>
      <div class="col-md-6 order-1">
        <div class="container">
          <img src="{{ asset('images/home-bg.png') }}" class="img-fluid" alt="image description">
        </div>
      </div>
    </div>
  </div>
  <div class=" sky-bg py-5">
    <div class="container py-5">
      <div class="row mx-0">
        <div class="col-md-6 ">
          <div class="container">
            <img src="{{ asset('images/otp-security 2.png') }}" class="img-fluid" alt="image description">
          </div>
        </div>
        <div class="col-md-6">
          <div class="container">
            <h2 class="navy-text py-4 fw-bolder">Why use Bliip?</h2>
            <p class="">
              With our OTP (One-Time Password) and email verification services,
              you can be rest assured that your users' information is protected from
              potential fraudsters and hackers. Our verification process is quick and easy,
              allowing your users to get started with your platform without any unnecessary delays.
            </p>
            <button class="btn navy-btn text-white">Get Started</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="py-5 container">
    <div class="row mx-0 my-5">
      <div class="col-md-6 oder-2">
        <div class="container">
          <h2 class="navy-text py-4 fw-bolder">What Makes us Different?</h2>
          <p class="">
            Our team of experts is committed to providing you with the highest level of service and support. Whether
            you have a question about our services or need help implementing our verification system, we are here to help.
          </p>
          <p>
            Join the thousands of businesses that trust our OTP & Email Verification website to protect their users' data. Sign up today
            and experience the peace of mind that comes with knowing your platform is secure.
          </p>

          <button class="btn navy-btn text-white">Get Started</button>
        </div>
      </div>
      <div class="col-md-6 orer-1">
        <div class="container">
          <img src="{{ asset('images/team-discussion.png') }}" class="img-fluid" alt="image description">
        </div>
      </div>
    </div>
  </div>
  <div class="navy-bg py-5">
    <div class="container">
      <h2 class="text-center py-4 text-white">Types of OTP services we offer</h2>
      <div class="container">
        <div class="d-md-flex justify-content-center">
          <div class="card me-md-4 pt-1 ps-1 my-3" style="max-width: 18rem;">
            <div class="navy-bg rounded-circle text-white" style="width:fit-content; padding:0.2rem 0.5rem; font-size:10px;">1</div>
            <div class="card-body">
              <h5 class="card-title">EMAIL OTP</h5>
              <p class="card-text">The OTP is sent via email to the user's registered email address and is typically a six-digit code that is valid for a limited period, usually a few minutes. The user is required
                to enter the OTP into the online platform to complete the login or transaction process.
              </p>
            </div>
          </div>
          <div class="card pt-1 ps-1  my-3" style="max-width: 18rem;">
            <div class="navy-bg rounded-circle text-white" style="width:fit-content; padding:0.2rem 0.5rem; font-size:10px;">2</div>
            <div class="card-body">
              <h5 class="card-title">SMS OTP</h5>
              <p class="card-text">
                The user provides their phone number during the account registration process, and when they attempt to log in, the system sends a unique OTP to their phone number via SMS.
                The user then enters the OTP into the login page to verify their identity and access their account.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 border sky-bg">
    <div class="container">
      <div class="d-flex justify-content-around">
        <div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step1.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">Easy to use</p>
          </div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step2.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">Efficiency</p>
          </div>
        </div>
        <div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step3.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">
              cost Effective
            </p>
          </div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step4.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">Secure</p>
          </div>
        </div>
        <div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step5.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">No delay</p>
          </div>
          <div class="d-md-flex py-2 align-items-center">
            <div>
              <img src="{{ asset('images/step6.png') }}" class="img-fluid" alt="image description">
            </div>
            <p class="text-center ms-md-2">Flexible</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row mx-0">
        <div class="col-md-7 d-flex flex-column">
          <!-- <div class=""> -->
          <div class="order-md-2 pt-md-5">
            <img src="{{ asset('images/growth1.png') }}" class="img-fluid" alt="image description">
          </div>
          <h2 class="py-5 order-md-1">3 easy step!</h2>
          <!-- </div> -->
        </div>
        <div class="col-md-5">
          <div>
            <div class="card border-0 sky-bg me-md-4 my-3" style="max-width: 18rem;">
              <div class="bg-primary rounded-circle text-white" style="width:fit-content; padding:0.2rem 0.5rem; font-size:10px;">1</div>
              <div class="card-body">
                <p class="card-title fw-bold  card-header">VERIFICATION REQUEST</p>
                <p class="card-text">
                  Customer clicks on the ‘Verify’ button on your app or website and a unique OTP is generated in your backend system
                </p>
              </div>
            </div>
            <div class="card border-0 sky-bg me-md-4 my-3" style="max-width: 18rem;">
              <div class="bg-primary rounded-circle text-white" style="width:fit-content; padding:0.2rem 0.5rem; font-size:10px;">1</div>
              <div class="card-body">
                <p class="card-title fw-bold card-header">BLIIP VERIFICATION</p>
                <p class="card-text">
                  <span class="text-primary">Bliip</span> fetches the generated OTP and sends it to your customer’s registered mobile number.
                </p>
              </div>
            </div>
            <div class="card border-0 sky-bg me-md-4 my-3" style="max-width: 18rem;">
              <div class="bg-primary rounded-circle text-white" style="width:fit-content; padding:0.2rem 0.5rem; font-size:10px;">1</div>
              <div class="card-body">
                <p class="card-title fw-bold card-header">NUMBER VERIFIED</p>
                <p class="card-text">
                  Your customer enters the unique OTP sent by BliiP on your app or website and gets verified instantly. </p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="py-5 border sky-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
          <div class="">
            <img src="{{ asset('images/conversation1.png') }}" class="img-fluid" alt="image description">
          </div>
        </div>
        <div class="col-md-6 order-md-1">
          <div class="">
            <h2 class="py-5 navy-text">Why is OTP so Important</h2>
            <p>OTP (One-Time Password) is a security feature used to verify the identity of a user during the
              login process or when performing a sensitive transaction. OTP is a temporary code that is generated
              for a single-use and expires after a short period of time. The purpose
              of OTP is to enhance security and prevent unauthorized access to sensitive information or transactions.
            </p>
            <p>OTP is commonly used for the following purposes:</p>
            <ol>
              <li><b>Two-Factor Authentication:</b> OTP is often used as part of a two-factor authentication (2FA) system,
                where the user must provide both a password and an OTP to log in or perform a transaction. This adds
                an extra layer of security and helps prevent unauthorized access even if the password is compromised.
              </li>
              <li>
                <b>Online Banking:</b> Many banks use OTP as a security measure when customers log
                in to their online banking accounts or perform transactions such as transferring funds or
                paying bills.
              </li>
              <li>
                <b>E-commerce:</b> OTP is used by e-commerce websites to
                verify the identity of customers during the checkout process, especially for high-value purchases.
              </li>
              <li>
                <b>Password Resets:</b> OTP can be used to reset passwords for online accounts,
                providing an additional layer of security and preventing unauthorized access to user accounts.
              </li>
            </ol>
            <p>Overall, OTP is used to enhance security and protect sensitive information and transactions from unauthorized access or fraud.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <h2 class="text-center navy-text py-4">Pricing</h2>
      <div class="row">
        <div class="col-md-6">
          <div>
            <img src="{{ asset('images/tax-percentage1.png') }}" class="img-fluid" alt="image description">
          </div>
          <div>
            <button class="btn text-white navy-btn">try for free</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="py-3">
            <div class="border rounded p-3 " style=" box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,.2);">
              <p class="tex-center text-primary">EMAIL OTP ONLY</p>
              <p><b>$0 /month</b></p>
              <ul>
                <li>Up to 2,000 valid requests</li>
                <li>3 verification channels</li>
                <li>Downloadable logs</li>
                <li>Your own branding</li>
                <li>Fraud Dictation</li>
                <li>Multiple language support</li>
              </ul>
            </div>
          </div>
          <div class="py-3">
            <div class="border rounded p-3 " style=" box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,.2);">
              <p class="tex-center text-primary">EMAIL OTP ONLY</p>
              <p><b>$0 /month</b></p>
              <ul>
                <li>Up to 2,000 valid requests</li>
                <li>3 verification channels</li>
                <li>Downloadable logs</li>
                <li>Your own branding</li>
                <li>Fraud Dictation</li>
                <li>Multiple language support</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="py-3">
            <div class="border rounded p-3 border-primry" style=" box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,.2);">
              <p class="tex-center text-primary">EMAIL OTP ONLY</p>
              <p><b>$0 /month</b></p>
              <ul>
                <li>Up to 2,000 valid requests</li>
                <li>3 verification channels</li>
                <li>Downloadable logs</li>
                <li>Your own branding</li>
                <li>Fraud Dictation</li>
                <li>Multiple language support</li>
              </ul>
            </div>
          </div>
          <div class="py-3">
            <div class="border rounded p-3 border-primry" style=" box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,.2);">
              <p class="tex-center text-primary">EMAIL OTP ONLY</p>
              <p><b>$0 /month</b></p>
              <ul>
                <li>Up to 2,000 valid requests</li>
                <li>3 verification channels</li>
                <li>Downloadable logs</li>
                <li>Your own branding</li>
                <li>Fraud Dictation</li>
                <li>Multiple language support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop