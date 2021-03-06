<?php namespace Anomaly\BlocksModule\Block;

use Anomaly\BlocksModule\Block\Contract\BlockInterface;
use Anomaly\BlocksModule\Block\Contract\BlockRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class BlockRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BlocksModule\Block
 */
class BlockRepository extends EntryRepository implements BlockRepositoryInterface
{

    /**
     * The block model.
     *
     * @var BlockModel
     */
    protected $model;

    /**
     * Create a new BlockRepository instance.
     *
     * @param BlockModel $model
     */
    public function __construct(BlockModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a block by it's slug.
     *
     * @param $slug
     * @return null|BlockInterface
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
