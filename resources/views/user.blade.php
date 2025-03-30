<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <div class="container">
            @if ($userInformation)
            <div class="card mt-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="caption-top table table-striped table-hover">
                            <caption>
                                {{ __('Get User Location by IP Address') }}
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col" class="table-primary">{{ __('IP') }}</th>
                                    <th scope="col">{{ __('Country Name') }}</th>
                                    <th scope="col">{{ __('Country Code') }}</th>
                                    <th scope="col">{{ __('Region Code') }}</th>
                                    <th scope="col">{{ __('Region Name') }}</th>
                                    <th scope="col">{{ __('City Name') }}</th>
                                    <th scope="col">{{ __('Zip Code') }}</th>
                                    <th scope="col">{{ __('Latitude') }}</th>
                                    <th scope="col">{{ __('Longitude') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold table-primary text-danger">{{ $userInformation->ip }}</td>
                                    <td>{{ __($userInformation->countryName) }}</td>
                                    <td>{{ $userInformation->countryCode }}</td>
                                    <td>{{ $userInformation->regionCode }}</td>
                                    <td>{{ __($userInformation->regionName) }}</td>
                                    <td>{{ __($userInformation->cityName) }}</td>
                                    <td>{{ $userInformation->zipCode }}</td>
                                    <td>{{ $userInformation->latitude }}</td>
                                    <td>{{ $userInformation->longitude }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </body>
</html>
