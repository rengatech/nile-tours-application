
<div class="bookForm" id="#booknow1">
    <div class="d-flex justify-content-end">
        <img src="./images/close-outline.svg" width="50px" class="call-btn">
    </div>

    <h2 style="color: #0D7A3B;">GET A CALL BACK</h2>
    <small>I'll get back to you as quickly as possible</small>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/add">
    @csrf
    <input placeholder="Name" type="text" required />
    <input placeholder="Email" type="email" required />
    <input placeholder="Mobile Number" type="text" required />
    <input placeholder="Travel Date" type="date" required />
    <input placeholder="Number Of Members" type="number" required />
    <textarea placeholder="Message"></textarea>
    <input class="formBtn btnsubmit" type="submit" />
    {{-- <input class="formBtn" type="reset" /> --}}
    </form>
</div>
