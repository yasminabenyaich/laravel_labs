<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[0]->title) !!}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src={{ asset('img/team/1.jpg') }}>
                    <h2>Christinne Williams</h2>
                    <h3>Project Manager</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src={{ asset('img/team/2.jpg') }}>
                    <h2>Christinne Williams</h2>
                    <h3>Junior developer</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src={{ asset('img/team/3.jpg') }}>
                    <h2>Christinne Williams</h2>
                    <h3>Digital designer</h3>
                </div>
            </div>
        </div>
    </div>
</div>