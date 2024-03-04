<div style="text-align: center;">
    <input type="text" wire:model="search" wire:keydown="Search" placeholder="Search users...">

    <div style="width: 100%;">
        <?php $count = 0; ?>
        <?php foreach ($users as $user) : ?>
            <?php if ($count % 3 === 0) : ?>
                <div style="display: flex; justify-content: space-between;">
                <?php endif; ?>
                <div style="flex: 1; margin: 1em; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div style="border-radius: 15px; background-color: #f2f2f2; padding: 1em; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <h5><?php echo $user['name']; ?></h5>
                        <p><?php echo $user['email']; ?></p>
                    </div>
                </div>
                <?php if ($count % 3 === 2 || $count === count($users) - 1) : ?>
                </div>
            <?php endif; ?>
            <?php $count++; ?>
        <?php endforeach; ?>
    </div>

    <?php echo $users->links(); ?>
</div>