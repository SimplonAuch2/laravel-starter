<html>
    <head>
        <title>App Name</title>
    </head>
    <body>


        <div class="container">
          @foreach ($customers as $customer)
              <p>Mon prénom: {{ $customer->first_name }}, Mon nom: {{ $customer->last_name }} </p>
          @endforeach
        </div>
    </body>
</html>
