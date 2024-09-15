<?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/recomendations.php' ?>
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Best LLM Recommendations</h3>
        </div>
        <div class="card-body">
            <?php renderTip(
                'User:',
                'For code completion tasks, 
                                you may also explore <strong>Codex</strong>, 
                                a model specialized in code generation and improvement.',
                'info'
            ) ?>
            <?php renderTip('Recent Queries', '<ul>
                                        <li>How to optimize code using AI?</li>
                                        <li>Best practices for building AI models.</li>
                                        <li>LLM recommendations for legal documents.</li>
                                    </ul>', 'success') ?>
            <?php renderTip(
                'Tip:',
                'For code completion tasks, 
                                you may also explore <strong>Codex</strong>, 
                                a model specialized in code generation and improvement.',
                'warning'
            ) ?>
        </div>
    </div>
</div>