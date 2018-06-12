
<html>
<head>

    <link rel="stylesheet" type="text/css" href="css\form.css"></head>
<body >

<!-- multistep form -->
<form id="msform" method="post" action="create_fr">
{{ csrf_field() }}
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Informations Personnels</li>
        <li> Information du Bac</li>
        <li> Information Residentiel</li>
        <li>Informations Personnels (Parentale)</li>

    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Informations Personnels</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <table class="GeneratedTable">

            <tbody>
            <tr>
                <td >Specialité ou Option</td>
                <td><input type="text" name="specialite"></td>
                <td><input type="text" name="specialiteAR"></td>
                <td>اللإختصاص</td>
            </tr>
            <tr>
                <td>Diplome préparé</td>
                <td><input type="text" name="diplome"></td>
                <td><input type="text" name="diplomeAR"></td>
                <td>الشهادة</td>
            </tr>
            <tr>
                <td>Niveau d'etudes</td>
                <td><input type="text" name="niveauEtudes"></td>
                <td><input type="text" name="niveauEtudesAR"></td>
                <td>مستوى الدراسة</td>
            </tr>
            <tr>
                <td>NCIN [1]</td>
                <td colspan="2"><input type="text" name="cin"></td>
                <td>ب.ت.و</td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom"></td>
                <td><input type="text" name="nomAR"></td>
                <td>الإسم</td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom"></td>
                <td><input type="text" name="prenomAR"></td>
                <td>اللقب</td>
            </tr>
            <tr>
                <td>Nom de jeune fille </td>
                <td><input type="text" name="nomJeuneFille"></td>
                <td><input type="text" name="nomJeuneFilleAR"></td>
                <td>اللقب العائلي عند الولادة</td>
            </tr>
            <tr>
                <td>Date de Naissance</td>
                <td colspan="2"><input type="date" name="date_naissance"></td>

                <td>تاريخ الولادة</td>
            </tr>
            <tr>
                <td>sexe [2]</td>
                <td >Male<br>Female
                <td><input type="radio" name="sexe" value="male" checked><br>
                    <input type="radio" name="sexe" value="female"></td>
                <td>الجنس</td>
            </tr>
            <tr>
                <td>Lieu de Naissance</td>
                <td><input type="text" name="lieuNaissaance"></td>
                <td><input type="text" name="lieuNaissaanceAR"></td>
                <td>مكان الولادة</td>
            </tr>
            <tr>
                <td>Gouvernaurat du Lieu de Naissance</td>
                <td colspan="2"> <select>
                        <option value="Ariana">Ariana</option>
                        <option value="Béja">Béja</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Gabès">Gabès</option>
                        <option value="Gafsa">Gafsa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kairouan">Kairouan</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kébili">Kébili</option>
                        <option value="Le Kef">Le Kef</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="La Manouba">La Manouba</option>
                        <option value="Médenine">Médenine</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Siliana">Siliana</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Zaghouan">Zaghouan</option>
                    </select></td>

                <td>مكان الولادة</td>
            </tr>
            <tr>
                <td>Nationalité</td>
                <td><input type="text" name="nationalite"></td>
                <td><input type="text" name="nationaliteAR"></td>
                <td>الجنسية</td>
            </tr>
            <tr>
                <td>Numero Passeport - Etudiant Etranges</td>
                <td colspan="2"><input type="text" name="passeportEtudiantEtranger"></td>

                <td>رقم جواز السفر بالنسبة للطلبة الأجانب</td>
            </tr>
            <tr>
                <td>Numero d'affiliation CNSS [3]</td>
                <td colspan="2"><input type="number" name="cnss"></td>

                <td>بالنسبة للمنخرطين في صندوق الضمان الإجتماعي</td>
            </tr>
            <tr>
                <td>Etat Civil [4]</td>
                <td colspan="2">
                    <select name="etatCivil">
                        <option value="" selected> Etat Civil - الحالة المدنية</option>
                        <optgroup label="Français">
                        <option value="Célibataire"> Célibataire</option>
                        <option value="Marié(e)">Marié(e)</option>
                        <option value="Divorcé(e)">Divorcé(e)</option>
                        <option value="Veuf(e)">Veuf(e)</option>
                            <optgroup label="عربية">
                                <option value=" أعزب"> أعزب</option>
                                <option value="متزوج">متزوج</option>
                                <option value="مطلق"> مطلق</option>
                                <option value="أرمل">أرمل</option>
                    </select>
                </td>

                <td>الحالة المدنية</td>
            </tr>

            <tr>
                <td>Situation Militaire [5]</td>
                <td colspan="2">
                    <select name="situationMilitaire">
                        <option value="" selected>Situation Militaire - الحالة العسكرية</option>
                        <optgroup label="Français">
                        <option value="Non Concerné - غير معفى"> Non Concerné</option>
                        <option value="Sursiraire - مؤجل">Sursiraire</option>
                        <option value="Exempté - معفى">Exempté</option>
                        <option value="Service Accompli - أنهى الخدمة العسكرية">Service Accompli </option>
                            <optgroup label="عربية">
                                <option value="غير معفى"> غير معفى</option>
                                <option value="مؤجل">مؤجل</option>
                                <option value="معفى">معفى</option>
                                <option value="أنهى الخدمة العسكرية">أنهى الخدمة العسكرية</option>
                    </select>
                </td>
                <td>الحالة العسكرية</td>
            </tr>
            </tbody>
        </table>
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title"> Information du Bac</h2>

        <table class="GeneratedTable">

            <tbody>
            <tr>
                <td>Année de Bac</td>
                <td colspan="2"><input type="number" name="anneeBac"></td>
                <td>باكالوريا سنة</td>
            </tr>

            <tr>
                <td>Session [6]</td>
                <td colspan="2">
                    <select name="session">
                        <option value="" selected>Session</option>
                        <optgroup label="Français">
                        <option value="Session Principale"> Session Principale </option>
                        <option value="Session de Controle ">Session de Controle</option>
                            <optgroup label="عربية">
                                <option value="الدورة الرئيسية">الدورة الرئيسية</option>
                                <option value="دورة التدارك">دورة التدارك</option>



                    </select>
                </td>
                <td>الشعبة</td>
            </tr>
            <tr>
                <td>Section [7]</td>
                <td colspan="2">
                    <select name="section">
                        <option value="" selected>Section</option>
                        <optgroup label="Français">
                        <option value="Lettre - آداب"> Lettre</option>
                        <option value="Mathématiques - رياضيات">Mathématiques</option>
                        <option value="Sciences experimentales - علوم تجريبية">Sciences experimentales</option>
                        <option value="Economie et Gestion - اقتصاد و تصرف">Economie et Gestion </option>
                        <option value="Technique - تقنية">Technique</option>
                        <option value="Autres - أخرى">Autres</option>
                            <optgroup label="عربية">
                                <option value="آداب">آداب</option>
                                <option value=" رياضيات">رياضيات</option>
                                <option value="علوم تجريبية">علوم تجريبية</option>
                                <option value="اقتصاد و تصرف">اقتصاد و تصرف</option>
                                <option value="تقنية">تقنية</option>
                                <option value="أخرى">أخرى</option>
                    </select>
                </td>
                <td>الدورة</td>
            </tr>
            <tr>
                <td>Mention [8]</td>
                <td colspan="2">
                    <select name="mention">
                        <option value="" selected>Mention</option>
                        <optgroup label="Français">
                        <option value="Passable"> Passable</option>
                        <option value="Assez Bien ">Assez Bien</option>
                        <option value="Bien">Bien</option>
                        <option value="Tres Bien">Tres Bien </option>
                            <optgroup label="عربية">
                                <option value="متوسط"> متوسط</option>
                                <option value=" قريب من الحسن"> قريب من الحسن</option>
                                <option value="حسن">حسن</option>
                                <option value=" حسن جدا"> حسن جدا</option>

                    </select>
                </td>
                <td>الملاحظة</td>
            </tr>
            <tr>
                <td>Lycée d'origine</td>
                <td><input type="text" name="lyceeOrigine"></td>
                <td><input type="text" name="lyceeOrigineAR"></td>
                <td>المعهد الاصلي</td>
            </tr>
            <tr>
                <td>Gouvernorat / Délegation</td>
                <td><input type="text" name="govDeleg"></td>
                <td><input type="text" name="govDelegAR"></td>
                <td>المعتمدية</td>
            </tr>
            </tbody>
        </table>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title"> Information Residentiel</h2>

        <table class="GeneratedTable">

            <tbody>
            <tr>
                <td>Adresse (N° et Rue)</td>
                <td><input type="text" name="adresse"></td>
                <td><input type="text" name="adresseAR"></td>
                <td>العنوان</td>
            </tr>
            <tr>
                <td>Code Postale</td>
                <td colspan="2"><input type="text" name="codePostal"></td>
                <td>الترقيم البريدي</td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville"></td>
                <td><input type="text" name="villeAR"></td>
                <td>المدينة</td>
            </tr>
            <tr>
                <td>Gouvernorat</td>
                <td><input type="text" name="Gouvernorat"></td>
                <td><input type="text" name="GouvernoratAR"></td>
                <td>الولاية</td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td colspan="2"><input type="text" name="tel"></td>
                <td>الهاتف</td>
            </tr>
            <tr>
                <td>Profession (le cas echeant)</td>
                <td><input type="text" name="profession"></td>
                <td><input type="text" name="professionAR"></td>
                <td>المهنة عند الاقتضاء</td>
            </tr>
            <tr>
                <td>Etablissement</td>
                <td><input type="text" name="etablissement"></td>
                <td><input type="text" name="etablissementAR"></td>
                <td>مؤسسة العمل</td>
            </tr>

            </tbody>
        </table>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>




    <fieldset>
        <h2 class="fs-title">Informations Personnels (Parentale)</h2>

        <table class="GeneratedTable">

            <tbody>
            <tr>
                <td>PERE [9]</td>

                <td colspan="2"><select id="test" name="pere" onchange="showDiv(this)">
                        <option value="" selected disabled>Select</option>
                        <option value="0">لا</option>
                        <option value ="1">نعم</option>
                    </select></td>
                <td>الاب</td>
            </tr >


            <tr  class="hidden_father_section" style="display: none;">
                <td>Nom</td>
                <td><input type="text" name="nomPere"></td>
                <td><input type="text" name="nomPereAR"></td>
                <td>اللقب</td>
            </tr>
            <tr  class="hidden_father_section" style="display: none;">
                <td>Prénom</td>
                <td><input type="text" name="prenomPere"></td>
                <td><input type="text" name="prenomPereAR"></td>
                <td>اللإسم</td>
            </tr>
            <tr  class="hidden_father_section" style="display: none;">
                <td>Profession</td>
                <td><input type="text" name="professionPere"></td>
                <td><input type="text" name="professionPereAR"></td>
                <td>المهنة</td>
            </tr>
            <tr class="hidden_father_section" style="display: none;" >
                <td>Etablissement</td>
                <td><input type="text" name="etablissementPere"></td>
                <td><input type="text" name="etablissementPereAR"></td>
                <td>مكان العمل</td>
            </tr>

            <tr>
                <td>MERE [9]</td>
                <td colspan="2"><select id="test" name="mere" onchange="showDiv1(this)">
                        <option value="" selected disabled>Select</option>
                        <option value="0">لا</option>
                        <option value ="1">نعم</option>
                    </select></td>
                <td>الأم</td>
            </tr>
            <tr class="hidden_mother_section" style="display: none;">
                <td>Nom</td>
                <td><input type="text" name="nomMere"></td>
                <td><input type="text" name="nomMereAR"></td>
                <td>اللقب</td>
            </tr>
            <tr class="hidden_mother_section" style="display: none;">
                <td>Prenom</td>
                <td><input type="text" name="prenomMere"></td>
                <td><input type="text" name="prenomMereAR"></td>
                <td>اللإسم</td>
            </tr>
            <tr class="hidden_mother_section" style="display: none;">
                <td>Profession</td>
                <td><input type="text" name="professionMere"></td>
                <td><input type="text" name="professionMereAR"></td>
                <td>المهنة</td>
            </tr>
            <tr class="hidden_mother_section" style="display: none;">
                <td>Etablissement</td>
                <td><input type="text" name="etabliseementMere"></td>
                <td><input type="text" name="etabliseementMereAR"></td>
                <td>مكان العمل</td>
            </tr>
            <tr>
                <td>CONJOINT</td>
                <td colspan="2"><select id="test"  onchange="showDiv2(this)">
                        <option value="" selected disabled>Select</option>

                        <option value="0">لا</option>
                        <option value ="1">نعم</option>

                    </select></td>
                <td>الزوج</td>
            </tr>
            <tr class="hidden_conj_section" style="display: none;">
                <td>Nom</td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td>اللقب</td>
            </tr>
            <tr class="hidden_conj_section" style="display: none;">
                <td>Prénom</td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td>اللإسم</td>
            </tr>
            <tr class="hidden_conj_section" style="display: none;">
                <td>Profession</td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td>المهنة</td>
            </tr>
            <tr class="hidden_conj_section" style="display: none;">
                <td>Etablissement</td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td>مكان العمل</td>
            </tr>
            <tr class="hidden_conj_section" style="display: none;">
                <td>Nombre d'enfants</td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td>عدد الأطفال</td>
            </tr>
            </tbody>
        </table>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit"  class="submit action-button" value="Submit" />
    </fieldset>

</form>

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>-->

<script src='js/jquery.min.js'></script>
<script src='js/jquery.easing.min.js'></script>
<script src="js\form.js"></script>

</body>
</html>
