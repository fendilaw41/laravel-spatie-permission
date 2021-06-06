<div class="container">
    <div class="row">

        @hasrole('writer')
        <h6> Anda telah diberi peran [penulis].</h6>
    @else
        <h6> Anda TIDAK memiliki peran [penulis].</h6>
        @endhasrole
        @can('publish articles')
            <h6>Anda memiliki izin untuk [mengedit artikel].</h6>
        @else
            <h6> Maaf, Anda TIDAK boleh [mengedit artikel].</h6>
        @endcan

    </div>
</div>
