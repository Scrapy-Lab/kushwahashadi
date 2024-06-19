@foreach ($packages as $p)
<div class="col-md-4 free">
    <ul class="text-center">
        <li><img src="{{ url('/images/free.jpg') }}" alt=""></li>
        <li>
            <h3>{{$p->package_name}}</h3>
        </li>
        <li>
            <h2>₹{{$p->package_price}}</h2>
        </li>
        <li>
            <p>Contact Numbers {{$p->contact_number}} Times</p>
        </li>
        <li>
            <p>Direct Messages: {{$p->direct_msg}} Times</p>
        </li>
        <li>
            <p>Photo Gallery: {{$p->photo_gallery}} Images</p>
        </li>
        <li><a wire:click="addPackage({{ $p->id }})">Get this Package</a></li>
    </ul>
</div>
@endforeach