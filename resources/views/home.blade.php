

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <a id="login" href="/">lol</a>
                        <?php
                        $x=Auth::user();
                        $x1=$x['Inscription'];

                        if($x1==0)
                            {
                         echo "<br>inscription not completed , once your inscription is completed you can enter the dashboard";
                               header("Location: http://www.google.com/");
                                }
                                elseif ($x1==1)
                                    {
                                        echo "inscription completed";
                                    }

                        ?>

                </div>
            </div>
        </div>
    </div>
</div>

