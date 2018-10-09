
<div class="mt-2">
    <div class="card-deck">
        <div class="card text-center" style="background-color: #ffa10a;">
            <div class="card-body">
                <strong>Members</strong>

            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="glyphicon glyphicon-user"></span>
                    {{\App\Models\Member\Member::where('active', 1)->count()}}
                </div>
            </div>
        </div>

        <div class="card text-center" style="background-color: #ffa10a;">
            <div class="card-body">
                <strong>Operational Members</strong>

            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="glyphicon glyphicon-user"></span>
                    {{\App\Models\Member\Member::where('status', 'Operational')->where('active',1)->count()}}
                </div>
            </div>
        </div>

        <div class="card text-center" style="background-color: #ffa10a;">
            <div class="card-body">
                <strong>Non Operational Members</strong>
            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="glyphicon glyphicon-user"></span>
                    {{\App\Models\Member\Member::where('active', 1)->whereIn('status', ['Training','Non Operational'])->count()}}
                </div>
            </div>
        </div>

        <div class="card text-center" style="background-color: #952af1;">
            <div class="card-body" >
                <strong>Dogs</strong>
            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="fa fa-paw"></span>
                    {{\App\Models\Dog\Dog::where('active', 1)->count()}}
                </div>
            </div>
        </div>

        <div class="card text-center" style="background-color: #952af1;">
            <div class="card-body">
                <strong>Operational Dogs</strong>
            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="fa fa-paw"></span>
                    {{\App\Models\Dog\Dog::where('status', 'Operational')->where('active',1)->count()}}
                </div>
            </div>
        </div>

        <div class="card text-center" style="background-color: #952af1;">
            <div class="card-body">
                <strong>Non Operational Dogs</strong>
            </div>
            <div class="card-footer">
                <div style="font-size: 4rem;">
                    <span class="fa fa-paw"></span>
                    {{\App\Models\Dog\Dog::where('active', 1)->where('status', 'Training')->count()}}
                </div>
            </div>
        </div>
    </div>
</div>