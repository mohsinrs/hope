<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Consultant</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-bordered form-validate' id="frmDoctor">
                    <div class="control-group">
                        <label for="txtFirstName" class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text" name="txtFirstName" id="txtFirstName" class='input-xlarge required' value="<?php if (isset($result)) echo $result->FirstName; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtLastName" class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="txtLastName" id="txtLastName" class='input-xlarge required' value="<?php if (isset($result)) echo $result->LastName; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="rdoGender" class="control-label">Gender</label>
                        <div class="controls">
                            <div class="check-demo-col">
                                <div class="check-line">
                                    <input type="radio" id="Male" class='icheck-me' name="rdoGender" value="Male" data-skin="square" data-color="blue" checked>
                                    <label class='inline' for="Male">Male</label>
                                </div>
                                <div class="check-line">
                                    <input type="radio" id="Female" class='icheck-me' name="rdoGender" value="Female" data-skin="square" data-color="blue">
                                    <label class='inline' for="Female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbGraduation" class="control-label">Year of Graduation</label>
                        <div class="controls">
                            <select name="cmbGraduation" id="cmbGraduation" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="2014" <?php if (isset($result)) echo $result->GraduationYear == '2014' ? 'selected' : ''; ?>>2014</option>
                                <option value="2013" <?php if (isset($result)) echo $result->GraduationYear == '2013' ? 'selected' : ''; ?>>2013</option>
                                <option value="2012" <?php if (isset($result)) echo $result->GraduationYear == '2012' ? 'selected' : ''; ?>>2012</option>
                                <option value="2011" <?php if (isset($result)) echo $result->GraduationYear == '2011' ? 'selected' : ''; ?>>2011</option>
                                <option value="2010" <?php if (isset($result)) echo $result->GraduationYear == '2010' ? 'selected' : ''; ?>>2010</option>
                                <option value="2009" <?php if (isset($result)) echo $result->GraduationYear == '2009' ? 'selected' : ''; ?>>2009</option>
                                <option value="2008" <?php if (isset($result)) echo $result->GraduationYear == '2008' ? 'selected' : ''; ?>>2008</option>
                                <option value="2007" <?php if (isset($result)) echo $result->GraduationYear == '2007' ? 'selected' : ''; ?>>2007</option>
                                <option value="2006" <?php if (isset($result)) echo $result->GraduationYear == '2006' ? 'selected' : ''; ?>>2006</option>
                                <option value="2005" <?php if (isset($result)) echo $result->GraduationYear == '2005' ? 'selected' : ''; ?>>2005</option>
                                <option value="2004" <?php if (isset($result)) echo $result->GraduationYear == '2004' ? 'selected' : ''; ?>>2004</option>
                                <option value="2003" <?php if (isset($result)) echo $result->GraduationYear == '2003' ? 'selected' : ''; ?>>2003</option>
                                <option value="2002" <?php if (isset($result)) echo $result->GraduationYear == '2002' ? 'selected' : ''; ?>>2002</option>
                                <option value="2001" <?php if (isset($result)) echo $result->GraduationYear == '2001' ? 'selected' : ''; ?>>2001</option>
                                <option value="2000" <?php if (isset($result)) echo $result->GraduationYear == '2000' ? 'selected' : ''; ?>>2000</option>
                                <option value="1999" <?php if (isset($result)) echo $result->GraduationYear == '2000' ? 'selected' : ''; ?>>1999</option>
                                <option value="1998" <?php if (isset($result)) echo $result->GraduationYear == '1999' ? 'selected' : ''; ?>>1998</option>
                                <option value="1997" <?php if (isset($result)) echo $result->GraduationYear == '1998' ? 'selected' : ''; ?>>1997</option>
                                <option value="1996" <?php if (isset($result)) echo $result->GraduationYear == '1997' ? 'selected' : ''; ?>>1996</option>
                                <option value="1995" <?php if (isset($result)) echo $result->GraduationYear == '1996' ? 'selected' : ''; ?>>1995</option>
                                <option value="1994" <?php if (isset($result)) echo $result->GraduationYear == '1994' ? 'selected' : ''; ?>>1994</option>
                                <option value="1993" <?php if (isset($result)) echo $result->GraduationYear == '1993' ? 'selected' : ''; ?>>1993</option>
                                <option value="1992" <?php if (isset($result)) echo $result->GraduationYear == '1992' ? 'selected' : ''; ?>>1992</option>
                                <option value="1991" <?php if (isset($result)) echo $result->GraduationYear == '1991' ? 'selected' : ''; ?>>1991</option>
                                <option value="1990" <?php if (isset($result)) echo $result->GraduationYear == '1990' ? 'selected' : ''; ?>>1990</option>
                                <option value="1989" <?php if (isset($result)) echo $result->GraduationYear == '1989' ? 'selected' : ''; ?>>1989</option>
                                <option value="1988" <?php if (isset($result)) echo $result->GraduationYear == '1988' ? 'selected' : ''; ?>>1988</option>
                                <option value="1987" <?php if (isset($result)) echo $result->GraduationYear == '1987' ? 'selected' : ''; ?>>1987</option>
                                <option value="1986" <?php if (isset($result)) echo $result->GraduationYear == '1986' ? 'selected' : ''; ?>>1986</option>
                                <option value="1985" <?php if (isset($result)) echo $result->GraduationYear == '1985' ? 'selected' : ''; ?>>1985</option>
                                <option value="1984" <?php if (isset($result)) echo $result->GraduationYear == '1984' ? 'selected' : ''; ?>>1984</option>
                                <option value="1983" <?php if (isset($result)) echo $result->GraduationYear == '1983' ? 'selected' : ''; ?>>1983</option>
                                <option value="1982" <?php if (isset($result)) echo $result->GraduationYear == '1982' ? 'selected' : ''; ?>>1982</option>
                                <option value="1981" <?php if (isset($result)) echo $result->GraduationYear == '1981' ? 'selected' : ''; ?>>1981</option>
                                <option value="1980" <?php if (isset($result)) echo $result->GraduationYear == '1980' ? 'selected' : ''; ?>>1980</option>
                                <option value="1979" <?php if (isset($result)) echo $result->GraduationYear == '1979' ? 'selected' : ''; ?>>1979</option>
                                <option value="1978" <?php if (isset($result)) echo $result->GraduationYear == '1978' ? 'selected' : ''; ?>>1978</option>
                                <option value="1977" <?php if (isset($result)) echo $result->GraduationYear == '1977' ? 'selected' : ''; ?>>1977</option>
                                <option value="1976" <?php if (isset($result)) echo $result->GraduationYear == '1976' ? 'selected' : ''; ?>>1976</option>
                                <option value="1975" <?php if (isset($result)) echo $result->GraduationYear == '1975' ? 'selected' : ''; ?>>1975</option>
                                <option value="1974" <?php if (isset($result)) echo $result->GraduationYear == '1974' ? 'selected' : ''; ?>>1974</option>
                                <option value="1973" <?php if (isset($result)) echo $result->GraduationYear == '1973' ? 'selected' : ''; ?>>1973</option>
                                <option value="1972" <?php if (isset($result)) echo $result->GraduationYear == '1972' ? 'selected' : ''; ?>>1972</option>
                                <option value="1971" <?php if (isset($result)) echo $result->GraduationYear == '1971' ? 'selected' : ''; ?>>1971</option>
                                <option value="1970" <?php if (isset($result)) echo $result->GraduationYear == '1970' ? 'selected' : ''; ?>>1970</option>
                                <option value="1969" <?php if (isset($result)) echo $result->GraduationYear == '1969' ? 'selected' : ''; ?>>1969</option>
                                <option value="1968" <?php if (isset($result)) echo $result->GraduationYear == '1968' ? 'selected' : ''; ?>>1968</option>
                                <option value="1967" <?php if (isset($result)) echo $result->GraduationYear == '1967' ? 'selected' : ''; ?>>1967</option>
                                <option value="1966" <?php if (isset($result)) echo $result->GraduationYear == '1966' ? 'selected' : ''; ?>>1966</option>
                                <option value="1965" <?php if (isset($result)) echo $result->GraduationYear == '1965' ? 'selected' : ''; ?>>1965</option>
                                <option value="1964" <?php if (isset($result)) echo $result->GraduationYear == '1964' ? 'selected' : ''; ?>>1964</option>
                                <option value="1963" <?php if (isset($result)) echo $result->GraduationYear == '1963' ? 'selected' : ''; ?>>1963</option>
                                <option value="1962" <?php if (isset($result)) echo $result->GraduationYear == '1962' ? 'selected' : ''; ?>>1962</option>
                                <option value="1961" <?php if (isset($result)) echo $result->GraduationYear == '1961' ? 'selected' : ''; ?>>1961</option>
                                <option value="1960" <?php if (isset($result)) echo $result->GraduationYear == '1960' ? 'selected' : ''; ?>>1960</option>
                                <option value="1959" <?php if (isset($result)) echo $result->GraduationYear == '1959' ? 'selected' : ''; ?>>1959</option>
                                <option value="1958" <?php if (isset($result)) echo $result->GraduationYear == '1958' ? 'selected' : ''; ?>>1958</option>
                                <option value="1957" <?php if (isset($result)) echo $result->GraduationYear == '1957' ? 'selected' : ''; ?>>1957</option>
                                <option value="1956" <?php if (isset($result)) echo $result->GraduationYear == '1956' ? 'selected' : ''; ?>>1956</option>
                                <option value="1955" <?php if (isset($result)) echo $result->GraduationYear == '1955' ? 'selected' : ''; ?>>1955</option>
                                <option value="1954" <?php if (isset($result)) echo $result->GraduationYear == '1954' ? 'selected' : ''; ?>>1954</option>
                                <option value="1953" <?php if (isset($result)) echo $result->GraduationYear == '1953' ? 'selected' : ''; ?>>1953</option>
                                <option value="1952" <?php if (isset($result)) echo $result->GraduationYear == '1952' ? 'selected' : ''; ?>>1952</option>
                                <option value="1951" <?php if (isset($result)) echo $result->GraduationYear == '1951' ? 'selected' : ''; ?>>1951</option>
                                <option value="1950" <?php if (isset($result)) echo $result->GraduationYear == '1950' ? 'selected' : ''; ?>>1950</option>
                                <option value="1949" <?php if (isset($result)) echo $result->GraduationYear == '1949' ? 'selected' : ''; ?>>1949</option>
                                <option value="1948" <?php if (isset($result)) echo $result->GraduationYear == '1948' ? 'selected' : ''; ?>>1948</option>
                                <option value="1947" <?php if (isset($result)) echo $result->GraduationYear == '1947' ? 'selected' : ''; ?>>1947</option>
                                <option value="1946" <?php if (isset($result)) echo $result->GraduationYear == '1946' ? 'selected' : ''; ?>>1946</option>
                                <option value="2010" <?php if (isset($result)) echo $result->GraduationYear == '1945' ? 'selected' : ''; ?>>1945</option>
                                <option value="1944" <?php if (isset($result)) echo $result->GraduationYear == '1944' ? 'selected' : ''; ?>>1944</option>
                                <option value="1943" <?php if (isset($result)) echo $result->GraduationYear == '1943' ? 'selected' : ''; ?>>1943</option>
                                <option value="1942" <?php if (isset($result)) echo $result->GraduationYear == '1942' ? 'selected' : ''; ?>>1942</option>
                                <option value="1941" <?php if (isset($result)) echo $result->GraduationYear == '1941' ? 'selected' : ''; ?>>1941</option>
                                <option value="1940" <?php if (isset($result)) echo $result->GraduationYear == '1940' ? 'selected' : ''; ?>>1940</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="chkUSMLE" class="control-label">Have attended USMLE?</label>
                        <div class="controls">
                            <div class="check-demo-col">
                                <div class="check-line">
                                    <input type="checkbox" id="chkUSMLE" name="chkUSMLE" class='icheck-me' data-skin="square" data-color="blue">
                                    <label class='inline' for="chkUSMLE">Check if attended USMLE</label>
                                </div>
                            </div>
                            <span class="help-block">This is meant to help assign suitable applicant for guidance.</span>
                        </div>
                    </div>
                    <div class="control-group usmle hide">
                        <label for="cmbUSMLE1" class="control-label">USMLE Step 1 Score</label>
                        <div class="controls">
                            <select name="cmbUSMLE1" id="cmbUSMLE1" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="100" <?php if (isset($result)) echo $result->USMLE1 == '100' ? 'selected' : ''; ?>>100</option>
                                <option value="99" <?php if (isset($result)) echo $result->USMLE1 == '99' ? 'selected' : ''; ?>>99</option>
                                <option value="98" <?php if (isset($result)) echo $result->USMLE1 == '98' ? 'selected' : ''; ?>>98</option>
                                <option value="97" <?php if (isset($result)) echo $result->USMLE1 == '97' ? 'selected' : ''; ?>>97</option>
                                <option value="96" <?php if (isset($result)) echo $result->USMLE1 == '96' ? 'selected' : ''; ?>>96</option>
                                <option value="95" <?php if (isset($result)) echo $result->USMLE1 == '95' ? 'selected' : ''; ?>>95</option>
                                <option value="94" <?php if (isset($result)) echo $result->USMLE1 == '94' ? 'selected' : ''; ?>>94</option>
                                <option value="93" <?php if (isset($result)) echo $result->USMLE1 == '93' ? 'selected' : ''; ?>>93</option>
                                <option value="92" <?php if (isset($result)) echo $result->USMLE1 == '92' ? 'selected' : ''; ?>>92</option>
                                <option value="91" <?php if (isset($result)) echo $result->USMLE1 == '91' ? 'selected' : ''; ?>>91</option>
                                <option value="90" <?php if (isset($result)) echo $result->USMLE1 == '90' ? 'selected' : ''; ?>>90</option>
                                <option value="89" <?php if (isset($result)) echo $result->USMLE1 == '89' ? 'selected' : ''; ?>>89</option>
                                <option value="88" <?php if (isset($result)) echo $result->USMLE1 == '88' ? 'selected' : ''; ?>>88</option>
                                <option value="87" <?php if (isset($result)) echo $result->USMLE1 == '87' ? 'selected' : ''; ?>>87</option>
                                <option value="86" <?php if (isset($result)) echo $result->USMLE1 == '86' ? 'selected' : ''; ?>>86</option>
                                <option value="85" <?php if (isset($result)) echo $result->USMLE1 == '85' ? 'selected' : ''; ?>>85</option>
                                <option value="84" <?php if (isset($result)) echo $result->USMLE1 == '84' ? 'selected' : ''; ?>>84</option>
                                <option value="83" <?php if (isset($result)) echo $result->USMLE1 == '83' ? 'selected' : ''; ?>>83</option>
                                <option value="82" <?php if (isset($result)) echo $result->USMLE1 == '82' ? 'selected' : ''; ?>>82</option>
                                <option value="81" <?php if (isset($result)) echo $result->USMLE1 == '81' ? 'selected' : ''; ?>>81</option>
                                <option value="80" <?php if (isset($result)) echo $result->USMLE1 == '80' ? 'selected' : ''; ?>>80</option>
                                <option value="79" <?php if (isset($result)) echo $result->USMLE1 == '79' ? 'selected' : ''; ?>>79</option>
                                <option value="78" <?php if (isset($result)) echo $result->USMLE1 == '78' ? 'selected' : ''; ?>>78</option>
                                <option value="77" <?php if (isset($result)) echo $result->USMLE1 == '77' ? 'selected' : ''; ?>>77</option>
                                <option value="76" <?php if (isset($result)) echo $result->USMLE1 == '76' ? 'selected' : ''; ?>>76</option>
                                <option value="75" <?php if (isset($result)) echo $result->USMLE1 == '75' ? 'selected' : ''; ?>>75</option>
                                <option value="74" <?php if (isset($result)) echo $result->USMLE1 == '74' ? 'selected' : ''; ?>>74</option>
                                <option value="73" <?php if (isset($result)) echo $result->USMLE1 == '73' ? 'selected' : ''; ?>>73</option>
                                <option value="72" <?php if (isset($result)) echo $result->USMLE1 == '72' ? 'selected' : ''; ?>>72</option>
                                <option value="71" <?php if (isset($result)) echo $result->USMLE1 == '71' ? 'selected' : ''; ?>>71</option>
                                <option value="70" <?php if (isset($result)) echo $result->USMLE1 == '70' ? 'selected' : ''; ?>>70</option>
                                <option value="69" <?php if (isset($result)) echo $result->USMLE1 == '69' ? 'selected' : ''; ?>>69</option>
                                <option value="68" <?php if (isset($result)) echo $result->USMLE1 == '68' ? 'selected' : ''; ?>>68</option>
                                <option value="67" <?php if (isset($result)) echo $result->USMLE1 == '67' ? 'selected' : ''; ?>>67</option>
                                <option value="66" <?php if (isset($result)) echo $result->USMLE1 == '66' ? 'selected' : ''; ?>>66</option>
                                <option value="65" <?php if (isset($result)) echo $result->USMLE1 == '65' ? 'selected' : ''; ?>>65</option>
                                <option value="64" <?php if (isset($result)) echo $result->USMLE1 == '64' ? 'selected' : ''; ?>>64</option>
                                <option value="63" <?php if (isset($result)) echo $result->USMLE1 == '63' ? 'selected' : ''; ?>>63</option>
                                <option value="62" <?php if (isset($result)) echo $result->USMLE1 == '62' ? 'selected' : ''; ?>>62</option>
                                <option value="61" <?php if (isset($result)) echo $result->USMLE1 == '61' ? 'selected' : ''; ?>>61</option>
                                <option value="60" <?php if (isset($result)) echo $result->USMLE1 == '60' ? 'selected' : ''; ?>>60</option>
                                <option value="59" <?php if (isset($result)) echo $result->USMLE1 == '59' ? 'selected' : ''; ?>>59</option>
                                <option value="58" <?php if (isset($result)) echo $result->USMLE1 == '58' ? 'selected' : ''; ?>>58</option>
                                <option value="57" <?php if (isset($result)) echo $result->USMLE1 == '57' ? 'selected' : ''; ?>>57</option>
                                <option value="56" <?php if (isset($result)) echo $result->USMLE1 == '56' ? 'selected' : ''; ?>>56</option>
                                <option value="55" <?php if (isset($result)) echo $result->USMLE1 == '55' ? 'selected' : ''; ?>>55</option>
                                <option value="54" <?php if (isset($result)) echo $result->USMLE1 == '54' ? 'selected' : ''; ?>>54</option>
                                <option value="53" <?php if (isset($result)) echo $result->USMLE1 == '53' ? 'selected' : ''; ?>>53</option>
                                <option value="52" <?php if (isset($result)) echo $result->USMLE1 == '52' ? 'selected' : ''; ?>>52</option>
                                <option value="51" <?php if (isset($result)) echo $result->USMLE1 == '51' ? 'selected' : ''; ?>>51</option>
                                <option value="50" <?php if (isset($result)) echo $result->USMLE1 == '50' ? 'selected' : ''; ?>>50</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group usmle hide">
                        <label for="cmbUSMLE2" class="control-label">USMLE Step 2 Score</label>
                        <div class="controls">
                            <select name="cmbUSMLE2" id="cmbUSMLE2" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="100" <?php if (isset($result)) echo $result->USMLE2 == '100' ? 'selected' : ''; ?>>100</option>
                                <option value="99" <?php if (isset($result)) echo $result->USMLE2 == '99' ? 'selected' : ''; ?>>99</option>
                                <option value="98" <?php if (isset($result)) echo $result->USMLE2 == '98' ? 'selected' : ''; ?>>98</option>
                                <option value="97" <?php if (isset($result)) echo $result->USMLE2 == '97' ? 'selected' : ''; ?>>97</option>
                                <option value="96" <?php if (isset($result)) echo $result->USMLE2 == '96' ? 'selected' : ''; ?>>96</option>
                                <option value="95" <?php if (isset($result)) echo $result->USMLE2 == '95' ? 'selected' : ''; ?>>95</option>
                                <option value="94" <?php if (isset($result)) echo $result->USMLE2 == '94' ? 'selected' : ''; ?>>94</option>
                                <option value="93" <?php if (isset($result)) echo $result->USMLE2 == '93' ? 'selected' : ''; ?>>93</option>
                                <option value="92" <?php if (isset($result)) echo $result->USMLE2 == '92' ? 'selected' : ''; ?>>92</option>
                                <option value="91" <?php if (isset($result)) echo $result->USMLE2 == '91' ? 'selected' : ''; ?>>91</option>
                                <option value="90" <?php if (isset($result)) echo $result->USMLE2 == '90' ? 'selected' : ''; ?>>90</option>
                                <option value="89" <?php if (isset($result)) echo $result->USMLE2 == '89' ? 'selected' : ''; ?>>89</option>
                                <option value="88" <?php if (isset($result)) echo $result->USMLE2 == '88' ? 'selected' : ''; ?>>88</option>
                                <option value="87" <?php if (isset($result)) echo $result->USMLE2 == '87' ? 'selected' : ''; ?>>87</option>
                                <option value="86" <?php if (isset($result)) echo $result->USMLE2 == '86' ? 'selected' : ''; ?>>86</option>
                                <option value="85" <?php if (isset($result)) echo $result->USMLE2 == '85' ? 'selected' : ''; ?>>85</option>
                                <option value="84" <?php if (isset($result)) echo $result->USMLE2 == '84' ? 'selected' : ''; ?>>84</option>
                                <option value="83" <?php if (isset($result)) echo $result->USMLE2 == '83' ? 'selected' : ''; ?>>83</option>
                                <option value="82" <?php if (isset($result)) echo $result->USMLE2 == '82' ? 'selected' : ''; ?>>82</option>
                                <option value="81" <?php if (isset($result)) echo $result->USMLE2 == '81' ? 'selected' : ''; ?>>81</option>
                                <option value="80" <?php if (isset($result)) echo $result->USMLE2 == '80' ? 'selected' : ''; ?>>80</option>
                                <option value="79" <?php if (isset($result)) echo $result->USMLE2 == '79' ? 'selected' : ''; ?>>79</option>
                                <option value="78" <?php if (isset($result)) echo $result->USMLE2 == '78' ? 'selected' : ''; ?>>78</option>
                                <option value="77" <?php if (isset($result)) echo $result->USMLE2 == '77' ? 'selected' : ''; ?>>77</option>
                                <option value="76" <?php if (isset($result)) echo $result->USMLE2 == '76' ? 'selected' : ''; ?>>76</option>
                                <option value="75" <?php if (isset($result)) echo $result->USMLE2 == '75' ? 'selected' : ''; ?>>75</option>
                                <option value="74" <?php if (isset($result)) echo $result->USMLE2 == '74' ? 'selected' : ''; ?>>74</option>
                                <option value="73" <?php if (isset($result)) echo $result->USMLE2 == '73' ? 'selected' : ''; ?>>73</option>
                                <option value="72" <?php if (isset($result)) echo $result->USMLE2 == '72' ? 'selected' : ''; ?>>72</option>
                                <option value="71" <?php if (isset($result)) echo $result->USMLE2 == '71' ? 'selected' : ''; ?>>71</option>
                                <option value="70" <?php if (isset($result)) echo $result->USMLE2 == '70' ? 'selected' : ''; ?>>70</option>
                                <option value="69" <?php if (isset($result)) echo $result->USMLE2 == '69' ? 'selected' : ''; ?>>69</option>
                                <option value="68" <?php if (isset($result)) echo $result->USMLE2 == '68' ? 'selected' : ''; ?>>68</option>
                                <option value="67" <?php if (isset($result)) echo $result->USMLE2 == '67' ? 'selected' : ''; ?>>67</option>
                                <option value="66" <?php if (isset($result)) echo $result->USMLE2 == '66' ? 'selected' : ''; ?>>66</option>
                                <option value="65" <?php if (isset($result)) echo $result->USMLE2 == '65' ? 'selected' : ''; ?>>65</option>
                                <option value="64" <?php if (isset($result)) echo $result->USMLE2 == '64' ? 'selected' : ''; ?>>64</option>
                                <option value="63" <?php if (isset($result)) echo $result->USMLE2 == '63' ? 'selected' : ''; ?>>63</option>
                                <option value="62" <?php if (isset($result)) echo $result->USMLE2 == '62' ? 'selected' : ''; ?>>62</option>
                                <option value="61" <?php if (isset($result)) echo $result->USMLE2 == '61' ? 'selected' : ''; ?>>61</option>
                                <option value="60" <?php if (isset($result)) echo $result->USMLE2 == '60' ? 'selected' : ''; ?>>60</option>
                                <option value="59" <?php if (isset($result)) echo $result->USMLE2 == '59' ? 'selected' : ''; ?>>59</option>
                                <option value="58" <?php if (isset($result)) echo $result->USMLE2 == '58' ? 'selected' : ''; ?>>58</option>
                                <option value="57" <?php if (isset($result)) echo $result->USMLE2 == '57' ? 'selected' : ''; ?>>57</option>
                                <option value="56" <?php if (isset($result)) echo $result->USMLE2 == '56' ? 'selected' : ''; ?>>56</option>
                                <option value="55" <?php if (isset($result)) echo $result->USMLE2 == '55' ? 'selected' : ''; ?>>55</option>
                                <option value="54" <?php if (isset($result)) echo $result->USMLE2 == '54' ? 'selected' : ''; ?>>54</option>
                                <option value="53" <?php if (isset($result)) echo $result->USMLE2 == '53' ? 'selected' : ''; ?>>53</option>
                                <option value="52" <?php if (isset($result)) echo $result->USMLE2 == '52' ? 'selected' : ''; ?>>52</option>
                                <option value="51" <?php if (isset($result)) echo $result->USMLE2 == '51' ? 'selected' : ''; ?>>51</option>
                                <option value="50" <?php if (isset($result)) echo $result->USMLE2 == '50' ? 'selected' : ''; ?>>50</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group usmle hide">
                        <label for="chkUSMLECS" class="control-label">USMLE Step 2 CS</label>
                        <div class="controls">
                            <div class="check-demo-col">
                                <div class="check-line">
                                    <input type="checkbox" id="chkUSMLECS" name="chkUSMLECS" class='icheck-me' data-skin="square" data-color="blue">
                                    <label class='inline' for="chkUSMLECS">Check if completed</label>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="control-group">
                        <label for="cmbSpeciality" class="control-label">Specialty</label>
                        <div class="controls">
                            <select name="cmbSpeciality" id="cmbSpeciality" class='input-large' data-rule-required="true">
                                <option value="">Select One</option>
                                <?php if (is_array($speciality)) : ?>
                                    <?php foreach ($speciality as $spec): ?>
                                        <option value="<?php echo $spec->SpecialityID; ?>" <?php if (isset($result)) echo ($spec->SpecialityID == $result->SpecialityID) ? 'selected' : ''; ?>><?php echo $spec->Text; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtQualification" class="control-label">Postgraduate Qualifications</label>
                        <div class="controls">
                            <textarea name="txtQualification" id="txtQualification" class='input-xlarge'><?php echo isset($result) ? $result->PostQualification : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtEmail" class="control-label">Email Address</label>
                        <div class="controls">
                            <input type="text" name="txtEmail" id="txtEmail" class='input-xlarge required email' value="<?php echo isset($result) ? $result->Email : ''; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbState" class="control-label">State of Residence</label>
                        <div class="controls">
                            <select name="cmbState" id="cmbState" class='input-large' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Alabama" <?php if (isset($result)) echo $result->State == 'Alabama' ? 'selected' : ''; ?>>Alabama</option>
                                <option value="Alaska" <?php if (isset($result)) echo $result->State == 'Alaska' ? 'selected' : ''; ?>>Alaska</option>
                                <option value="Arizona" <?php if (isset($result)) echo $result->State == 'Arizona' ? 'selected' : ''; ?>>Arizona</option>
                                <option value="Arkansas" <?php if (isset($result)) echo $result->State == 'Arkansas' ? 'selected' : ''; ?>>Arkansas</option>
                                <option value="California" <?php if (isset($result)) echo $result->State == 'California' ? 'selected' : ''; ?>>California</option>
                                <option value="Colorado" <?php if (isset($result)) echo $result->State == 'Colorado' ? 'selected' : ''; ?>>Colorado</option>
                                <option value="Connecticut" <?php if (isset($result)) echo $result->State == 'Connecticut' ? 'selected' : ''; ?>>Connecticut</option>
                                <option value="Delaware" <?php if (isset($result)) echo $result->State == 'Delaware' ? 'selected' : ''; ?>>Delaware</option>
                                <option value="Florida" <?php if (isset($result)) echo $result->State == 'Florida' ? 'selected' : ''; ?>>Florida</option>
                                <option value="Georgia" <?php if (isset($result)) echo $result->State == 'Georgia' ? 'selected' : ''; ?>>Georgia</option>
                                <option value="Hawaii" <?php if (isset($result)) echo $result->State == 'Hawaii' ? 'selected' : ''; ?>>Hawaii</option>
                                <option value="Idaho" <?php if (isset($result)) echo $result->State == 'Idaho' ? 'selected' : ''; ?>>Idaho</option>
                                <option value="Illinois" <?php if (isset($result)) echo $result->State == 'Illinois' ? 'selected' : ''; ?>>Illinois</option>
                                <option value="Indiana" <?php if (isset($result)) echo $result->State == 'Indiana' ? 'selected' : ''; ?>>Indiana</option>
                                <option value="Iowa" <?php if (isset($result)) echo $result->State == 'Iowa' ? 'selected' : ''; ?>>Iowa</option>
                                <option value="Kansas" <?php if (isset($result)) echo $result->State == 'Kansas' ? 'selected' : ''; ?>>Kansas</option>
                                <option value="Kentucky" <?php if (isset($result)) echo $result->State == 'Kentucky' ? 'selected' : ''; ?>>Kentucky</option>
                                <option value="Louisiana" <?php if (isset($result)) echo $result->State == 'Louisiana' ? 'selected' : ''; ?>>Louisiana</option>
                                <option value="Maine" <?php if (isset($result)) echo $result->State == 'Maine' ? 'selected' : ''; ?>>Maine</option>
                                <option value="Maryland" <?php if (isset($result)) echo $result->State == 'Maryland' ? 'selected' : ''; ?>>Maryland</option>
                                <option value="Massachusetts" <?php if (isset($result)) echo $result->State == 'Massachusetts' ? 'selected' : ''; ?>>Massachusetts</option>
                                <option value="Michigan" <?php if (isset($result)) echo $result->State == 'Michigan' ? 'selected' : ''; ?>>Michigan</option>
                                <option value="Minnesota" <?php if (isset($result)) echo $result->State == 'Minnesota' ? 'selected' : ''; ?>>Minnesota</option>
                                <option value="Mississippi" <?php if (isset($result)) echo $result->State == 'Mississippi' ? 'selected' : ''; ?>>Mississippi</option>
                                <option value="Missouri" <?php if (isset($result)) echo $result->State == 'Missouri' ? 'selected' : ''; ?>>Missouri</option>
                                <option value="Montana" <?php if (isset($result)) echo $result->State == 'Montana' ? 'selected' : ''; ?>>Montana</option>
                                <option value="Nebraska" <?php if (isset($result)) echo $result->State == 'Nebraska' ? 'selected' : ''; ?>>Nebraska</option>
                                <option value="Nevada" <?php if (isset($result)) echo $result->State == 'Nevada' ? 'selected' : ''; ?>>Nevada</option>
                                <option value="New Hampshire" <?php if (isset($result)) echo $result->State == 'New Hampshire' ? 'selected' : ''; ?>>New Hampshire</option>
                                <option value="New Jersey" <?php if (isset($result)) echo $result->State == 'New Jersey' ? 'selected' : ''; ?>>New Jersey</option>
                                <option value="New Mexico" <?php if (isset($result)) echo $result->State == 'New Mexico' ? 'selected' : ''; ?>>New Mexico</option>
                                <option value="New York" <?php if (isset($result)) echo $result->State == 'New York' ? 'selected' : ''; ?>>New York</option>
                                <option value="North Carolina" <?php if (isset($result)) echo $result->State == 'North Carolina' ? 'selected' : ''; ?>>North Carolina</option>
                                <option value="North Dakota" <?php if (isset($result)) echo $result->State == 'North Dakota' ? 'selected' : ''; ?>>North Dakota</option>
                                <option value="Ohio" <?php if (isset($result)) echo $result->State == 'Ohio' ? 'selected' : ''; ?>>Ohio</option>
                                <option value="Oklahoma" <?php if (isset($result)) echo $result->State == 'Oklahoma' ? 'selected' : ''; ?>>Oklahoma</option>
                                <option value="Oregon" <?php if (isset($result)) echo $result->State == 'Oregon' ? 'selected' : ''; ?>>Oregon</option>
                                <option value="Pennsylvania" <?php if (isset($result)) echo $result->State == 'Pennsylvania' ? 'selected' : ''; ?>>Pennsylvania</option>
                                <option value="Rhode Island" <?php if (isset($result)) echo $result->State == 'Rhode Island' ? 'selected' : ''; ?>>Rhode Island</option>
                                <option value="South Carolina" <?php if (isset($result)) echo $result->State == 'South Carolina' ? 'selected' : ''; ?>>South Carolina</option>
                                <option value="South Dakota" <?php if (isset($result)) echo $result->State == 'South Dakota' ? 'selected' : ''; ?>>South Dakota</option>
                                <option value="Tennessee" <?php if (isset($result)) echo $result->State == 'Tennessee' ? 'selected' : ''; ?>>Tennessee</option>
                                <option value="Texas" <?php if (isset($result)) echo $result->State == 'Texas' ? 'selected' : ''; ?>>Texas</option>
                                <option value="Utah" <?php if (isset($result)) echo $result->State == 'Utah' ? 'selected' : ''; ?>>Utah</option>
                                <option value="Vermont" <?php if (isset($result)) echo $result->State == 'Vermont' ? 'selected' : ''; ?>>Vermont</option>
                                <option value="Virginia" <?php if (isset($result)) echo $result->State == 'Virginia' ? 'selected' : ''; ?>>Virginia</option>
                                <option value="Washington" <?php if (isset($result)) echo $result->State == 'Washington' ? 'selected' : ''; ?>>Washington</option>
                                <option value="West Virginia" <?php if (isset($result)) echo $result->State == 'West Virginia' ? 'selected' : ''; ?>>West Virginia</option>
                                <option value="Wisconsin" <?php if (isset($result)) echo $result->State == 'Wisconsin' ? 'selected' : ''; ?>>Wisconsin</option>
                                <option value="Wyoming" <?php if (isset($result)) echo $result->State == 'Wyoming' ? 'selected' : ''; ?>>Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtCity" class="control-label">City</label>
                        <div class="controls">
                            <input type="text" name="txtCity" id="txtCity" class='input-xlarge required' value="<?php if (isset($result)) echo $result->City; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtAddress" class="control-label">Home Address</label>
                        <div class="controls">
                            <textarea name="txtAddress" id="txtAddress" class='input-xlarge'><?php echo isset($result) ? $result->Address : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtPhone" class="control-label">Phone</label>
                        <div class="controls">
                            <input type="text" name="txtPhone" id="txtPhone" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Phone; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="rdoContactMethod" class="control-label">Preferred Method of Contact</label>
                        <div class="controls">
                            <div class="check-demo-col">
                                <div class="check-line">
                                    <input type="radio" id="ContactEmail" class='icheck-me' name="rdoContactMethod" value="1" data-skin="square" data-color="blue" checked>
                                    <label class='inline' for="ContactEmail">Email address only</label>
                                </div>
                                <div class="check-line">
                                    <input type="radio" id="ContactPhone" class='icheck-me' name="rdoContactMethod" value="2" data-skin="square" data-color="blue">
                                    <label class='inline' for="ContactPhone">Phone Number only</label>
                                </div>
                                <div class="check-line">
                                    <input type="radio" id="ContactEmailPhone" class='icheck-me' name="rdoContactMethod" value="" data-skin="square" data-color="blue">
                                    <label class='inline' for="ContactEmailPhone">Email address and Phone Number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="rdoStatus" class="control-label">Status</label>
                        <div class="controls">
                            <div class="check-demo-col">
                                <div class="check-line">
                                    <input type="radio" id="Active" class='icheck-me' name="rdoStatus" value="1" data-skin="square" data-color="blue" checked>
                                    <label class='inline' for="Active">Active</label>
                                </div>
                                <div class="check-line">
                                    <input type="radio" id="InActive" class='icheck-me' name="rdoStatus" value="0" data-skin="square" data-color="blue">
                                    <label class='inline' for="InActive">In Active</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span12">
                        <div class="form-actions">
                            <button type="submit" name="submit" value="frmDoctorsSubmit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#chkUSMLE').change(function(){
            if( $(this).prop('checked') ) {
                $('.usmle').removeClass('hide');
            } else {
                $('.usmle').addClass('hide');
            }
        });
        $('#chkUSMLE').trigger('change');
    });
</script>