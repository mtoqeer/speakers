@extends('user.layouts.app')
@section('title','User - Languages')
@section('pagename', 'Languages')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form method="POST" action="{{route('userLanguagesave')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{auth()->user()->id}}" class="form-control">
                    <div class="form-group">
                        <label for="expertise">Language</label>
                        <select name="language" id="language" class="form-control">
                                <option value="Afrikanns">Afrikanns</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Basque">Basque</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Catalan">Catalan</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                <option value="Croation">Croation</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Dutch">Dutch</option>
                                <option value="English">English</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finnish">Finnish</option>
                                <option value="French">French</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Irish">Irish</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Javanese">Javanese</option>
                                <option value="Korean">Korean</option>
                                <option value="Latin">Latin</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malay">Malay</option>
                                <option value="Malayalam">Malayalam</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Maori">Maori</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Persian">Persian</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Quechua">Quechua</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Samoan">Samoan</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swedish ">Swedish </option>
                                <option value="Tamil">Tamil</option>
                                <option value="Tatar">Tatar</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Thai">Thai</option>
                                <option value="Tibetan">Tibetan</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Ukranian">Ukranian</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Xhosa">Xhosa</option>
                        </select>
                    </div>
                    @if (session('message'))
                        <p id="language_added" class="alert alert-success">{{session('message')}}</p>
                    @endif

                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

                </form>

            </div>

            <div class="col-md-5 offset-md-1">
                
                <h4>Lanugages</h4>
                @foreach ($getlanguages as $language)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        {{$language->language}} - <a href="/dashboard/languages/{{$language->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="language_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif

            </div>
        </div>
    </div>
    

@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#language_added").delay(1500).slideUp(300);
    $("#language_deleted").delay(1500).slideUp(300);
});

</script>
@endsection