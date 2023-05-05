<div class="card border-0">
    <div class="card-body p-4">
        <h5 class="text-primary fw-bold">{{ $ticket->name }}</h5>
        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eveniet ipsum facere
            eius
            laboriosam voluptates atque repudiandae doloribus assumenda labore libero ab itaque totam
            voluptas perspiciatis, quae tempora modi eligendi?</h6>
        <br>
        <h6>Tanggal Tersedia : {{ $ticket->date }}</h6>
        <h6>Tiket Tersedia : {{ $ticket->quota }}</h6>
        <h6>Harga Tiket : {{ $ticket->price }}</h6>
        <br>
        <a href="/ticket" class="btn btn-primary p-2">Lihat Tiket</a>
    </div>
</div>
