@layout('docs::template')

@section('title')
Lava Api documentation
@endsection

@section('header')
Lava Api documentation
@endsection

@section("aside")
@parent
<li><a href="#convention">Conventions</a></li>
<li><a href="#headers">Authentication</a></li>

@endsection
@section('content')
<div id="functions">
    <div id="conventions">
        <h5>Conventions</h5>
        {{Typography::info("Please note that the return type for all the functions are JSON objects."."<br>"."The http headers contain the same value as the code in the json object produced")}}
        {{Typography::warning("In case of errors the messages array is populated and contains detailed messages on what happened")}}
        <span class="inline">  
            <p class="text-warning">To learn more about the HTTP status codes check out this
                {{HTML::link("http://en.wikipedia.org/wiki/List_of_HTTP_status_codes","Wiki")}} or 
                {{HTML::link("http://httpstatus.es/","Httpstatus.es")}}  
            </p>
        </span> 

    </div>
    <div id="headers">
        <span class="warning lead">
            This Api uses oauth for authentication the following are the endpoints:

        </span>
        {{Image::polaroid("http://i.imgur.com/ztGd2BL.png")}}


        {{HTML::dl(array("request token uri"=> url("account/oauth".'/token'),"authorize uri"=>url("account/oauth". '/authorize'),"access token uri"=>url("account/oauth". '/access_token')))}}


        <div class="info">
            The request token uri is a post request this returns the oauth token which is a string
            the following is  a dump of the headers required in json format 

            <script src="https://gist.github.com/marabooyankee/5c56b6a0dfb1ee06dac2.js"></script>


            After requesting the token you should then redirect to the authorize endpoint an
            example url redirect will be as such
            <script src="https://gist.github.com/marabooyankee/bb7a074447d0bcd20f93.js"></script>

            your users will see this 
            <div class="pull-center">
                {{Image::polaroid("http://i.imgur.com/EUflq2c.png","login form")}}
            </div>
            <div class="info">
                On successful login your users will be redirected  to your application 
                in order to get the user details make a signed request to /account/user function and
                the user details will be returned in json format
            </div>


        </div>








    </div><br>

</div>
@endsection