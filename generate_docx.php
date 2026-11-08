<?php
// Generates PROMPT_AND_GIT_REPORT.docx from PROMPT_LOG.md + git log.
// Run: php generate_docx.php
$root = __DIR__;
$out = $root . DIRECTORY_SEPARATOR . 'PROMPT_AND_GIT_REPORT.docx';
$promptLog = file_exists($root . '/PROMPT_LOG.md') ? file_get_contents($root . '/PROMPT_LOG.md') : '';
$gitLog = shell_exec('git log --pretty=fuller --decorate 2>&1');
$gitOneline = shell_exec('git log --oneline --graph --decorate 2>&1');
$gitStatus = shell_exec('git status 2>&1');
$gitRemote = shell_exec('git remote -v 2>&1');

function h($s){ return htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8'); }
function para($text, $style='Normal') {
    $pPr = '';
    if($style==='Title'){ $pPr='<w:pPr><w:pStyle w:val="Title"/></w:pPr>'; }
    elseif($style==='Heading1'){ $pPr='<w:pPr><w:pStyle w:val="Heading1"/></w:pPr>'; }
    elseif($style==='Heading2'){ $pPr='<w:pPr><w:pStyle w:val="Heading2"/></w:pPr>'; }
    elseif($style==='Code'){ $pPr='<w:pPr><w:pStyle w:val="Code"/></w:pPr>'; }
    return '<w:p>' . $pPr . '<w:r><w:t xml:space="preserve">' . h($text) . '</w:t></w:r></w:p>';
}
function heading($text,$lvl=1){ return para($text, $lvl===1?'Heading1':'Heading2'); }

$body='';
$body .= para('IPA BSIT 4 Midterm — Activity 1-3: Building and Hosting a Laravel Portfolio','Title');
$body .= para('AI Prompt Log + Git Commit History Report','Heading1');
$body .= para('Student: Mark Lorenz B. Borja — BSIT, Data Center College of Bangued, Philippines');
$body .= para('Location: Baddec, Palao, Bangued, Abra, Philippines');
$body .= para('Email: borjamarklorenz07@gmail.com    Phone: 09629974405');
$body .= para('Repository: https://github.com/borjamarklorenz/lorenzportfolio');
$body .= para('Agent: OpenCode development agent (Crouton Alpha)');
$body .= para('Framework: Laravel 12, Blade templating, no database (no migrations/models for portfolio data)');
$body .= para('Project root: lorenz_web/lorenz-portfolio (XAMPP: http://localhost/lorenz-portfolio)');
$body .= heading('1. Objective and required sections',1);
$body .= para('Build a static online portfolio with Laravel Blade covering: (a) Basic Information — name, profile picture, contact, short bio; (b) Educational Background — schools, years, degrees; (c) Projects — grid/list with descriptions (empty for now, dashboard layout ready); (d) GitHub Repository Links — clickable icons/links to source code. Track with Git and push to a public GitHub repo. Document every AI prompt.');
$body .= heading('2. AI Prompt Log (in order, start to finish)',1);
$body .= para('Same content as PROMPT_LOG.md in the repository root. Expanded below with agent outputs.',2);
// Split prompt log by lines, keep formatting
foreach (explode("\n", $promptLog) as $line) {
    if (strpos($line,'### Task:')===0) $body .= heading(trim($line),2);
    elseif (strpos($line,'* Prompt used:')===0 || strpos($line,'* Result/Output:')===0) $body .= para($line);
    elseif (trim($line)==='') $body .= para('');
    elseif (strpos($line,'# ')===0) $body .= para($line,'Heading1');
    elseif (strpos($line,'## ')===0) $body .= para($line,'Heading2');
    else $body .= para($line);
}
$body .= heading('3. Git Commit History (descriptive messages)',1);
$body .= para('git log --oneline --graph --decorate:',2);
foreach (explode("\n", trim($gitOneline)) as $l) $body .= para($l,'Code');
$body .= heading('Full history (git log --pretty=fuller)',2);
foreach (explode("\n", trim($gitLog)) as $l) $body .= para($l,'Code');
$body .= heading('Remote and status',2);
foreach (explode("\n", trim($gitRemote)) as $l) $body .= para($l,'Code');
foreach (explode("\n", trim($gitStatus)) as $l) $body .= para($l,'Code');
$body .= heading('4. Submission checklist',1);
$body .= para('1. Live URL of public GitHub repository: https://github.com/borjamarklorenz/lorenzportfolio');
$body .= para('2. PROMPT_LOG.md included inside repository root');
$body .= para('3. This Word file showing full prompt history + descriptive git history');
$body .= para('4. Deadline: August 28, 12:00 midnight — keep repo and local files for final project (do not delete).');

$documentXml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><w:document xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main"><w:body>' . $body . '</w:body></w:document>';
$stylesXml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><w:styles xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main"><w:style w:type="paragraph" w:default="1" w:styleId="Normal"><w:name w:val="Normal"/></w:style><w:style w:type="paragraph" w:styleId="Title"><w:name w:val="Title"/><w:basedOn w:val="Normal"/><w:rPr><w:b/><w:sz w:val="48"/></w:rPr></w:style><w:style w:type="paragraph" w:styleId="Heading1"><w:name w:val="Heading 1"/><w:basedOn w:val="Normal"/><w:rPr><w:b/><w:sz w:val="32"/></w:rPr></w:style><w:style w:type="paragraph" w:styleId="Heading2"><w:name w:val="Heading 2"/><w:basedOn w:val="Normal"/><w:rPr><w:b/><w:sz w:val="28"/></w:rPr></w:style><w:style w:type="paragraph" w:styleId="Code"><w:name w:val="Code"/><w:basedOn w:val="Normal"/><w:rPr><w:rFonts w:ascii="Consolas" w:hAnsi="Consolas"/><w:sz w:val="20"/></w:rPr></w:style></w:styles>';
$contentTypes = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types"><Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml"/><Default Extension="xml" ContentType="application/xml"/><Override PartName="/word/document.xml" ContentType="application/vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml"/><Override PartName="/word/styles.xml" ContentType="application/vnd.openxmlformats-officedocument.wordprocessingml.styles+xml"/></Types>';
$rels = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships"><Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/officeDocument" Target="word/document.xml"/></Relationships>';
$docRels = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships"><Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/styles" Target="styles.xml"/></Relationships>';

if(file_exists($out)) unlink($out);
$zip = new ZipArchive();
if($zip->open($out, ZipArchive::CREATE) !== true){ fwrite(STDERR,"Cannot create $out\n"); exit(1); }
$zip->addFromString('[Content_Types].xml', $contentTypes);
$zip->addFromString('_rels/.rels', $rels);
$zip->addFromString('word/document.xml', $documentXml);
$zip->addFromString('word/_rels/document.xml.rels', $docRels);
$zip->addFromString('word/styles.xml', $stylesXml);
$zip->close();
echo "Created $out (" . filesize($out) . " bytes)\n";
