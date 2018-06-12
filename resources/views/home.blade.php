

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

                        <?php
                        $x=Auth::user();
                        $x1=$x['Inscription'];
                        $x2=$x['role'];

                        if($x1==0 && $x2=='Etudiant')
                            {
                         echo "<br>inscription not completed , complete it<a href='/form'> Here<a/>";

                                }
                                elseif ($x1==1 && $x2=='Etudiant')
                                    {
                                        echo "<a href='/dashboard'> Proceed to Dashboard<a/>";
                                    }
                                    elseif ($x2=='prof')
                                        {
                                            echo "<a href='/dashboard'> Proceed to Dashboard<a/>";
                                        }

                        ?>

                </div>
            </div>
        </div>
    </div>
</div>

