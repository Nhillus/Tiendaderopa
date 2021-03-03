<?php

namespace Klikandpay\Model\Base;

use \DateTime;
use \Exception;
use \PDO;
use Klikandpay\Model\KlikandpayReturn as ChildKlikandpayReturn;
use Klikandpay\Model\KlikandpayReturnQuery as ChildKlikandpayReturnQuery;
use Klikandpay\Model\Map\KlikandpayReturnTableMap;
use Klikandpay\Model\Thelia\Model\Order as ChildOrder;
use Klikandpay\Model\Thelia\Model\OrderQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

abstract class KlikandpayReturn implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Klikandpay\\Model\\Map\\KlikandpayReturnTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the transaction field.
     * @var        string
     */
    protected $transaction;

    /**
     * The value for the order_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $order_id;

    /**
     * The value for the numxkp field.
     * @var        string
     */
    protected $numxkp;

    /**
     * The value for the paiement field.
     * @var        string
     */
    protected $paiement;

    /**
     * The value for the montantxkp field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $montantxkp;

    /**
     * The value for the devisexkp field.
     * @var        string
     */
    protected $devisexkp;

    /**
     * The value for the ipxkp field.
     * @var        string
     */
    protected $ipxkp;

    /**
     * The value for the paysrxkp field.
     * @var        string
     */
    protected $paysrxkp;

    /**
     * The value for the scrorexkp field.
     * @var        int
     */
    protected $scrorexkp;

    /**
     * The value for the paysbxkp field.
     * @var        string
     */
    protected $paysbxkp;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        Order
     */
    protected $aOrder;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->order_id = 0;
        $this->montantxkp = 0;
    }

    /**
     * Initializes internal state of Klikandpay\Model\Base\KlikandpayReturn object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (Boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (Boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>KlikandpayReturn</code> instance.  If
     * <code>obj</code> is an instance of <code>KlikandpayReturn</code>, delegates to
     * <code>equals(KlikandpayReturn)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        $thisclazz = get_class($this);
        if (!is_object($obj) || !($obj instanceof $thisclazz)) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey()
            || null === $obj->getPrimaryKey())  {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        if (null !== $this->getPrimaryKey()) {
            return crc32(serialize($this->getPrimaryKey()));
        }

        return crc32(serialize(clone $this));
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return KlikandpayReturn The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     *
     * @return KlikandpayReturn The current object, for fluid interface
     */
    public function importFrom($parser, $data)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), TableMap::TYPE_PHPNAME);

        return $this;
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        return array_keys(get_object_vars($this));
    }

    /**
     * Get the [id] column value.
     *
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [transaction] column value.
     *
     * @return   string
     */
    public function getTransaction()
    {

        return $this->transaction;
    }

    /**
     * Get the [order_id] column value.
     *
     * @return   int
     */
    public function getOrderId()
    {

        return $this->order_id;
    }

    /**
     * Get the [numxkp] column value.
     *
     * @return   string
     */
    public function getNumxkp()
    {

        return $this->numxkp;
    }

    /**
     * Get the [paiement] column value.
     *
     * @return   string
     */
    public function getPaiement()
    {

        return $this->paiement;
    }

    /**
     * Get the [montantxkp] column value.
     *
     * @return   double
     */
    public function getMontantxkp()
    {

        return $this->montantxkp;
    }

    /**
     * Get the [devisexkp] column value.
     *
     * @return   string
     */
    public function getDevisexkp()
    {

        return $this->devisexkp;
    }

    /**
     * Get the [ipxkp] column value.
     *
     * @return   string
     */
    public function getIpxkp()
    {

        return $this->ipxkp;
    }

    /**
     * Get the [paysrxkp] column value.
     *
     * @return   string
     */
    public function getPaysrxkp()
    {

        return $this->paysrxkp;
    }

    /**
     * Get the [scrorexkp] column value.
     *
     * @return   int
     */
    public function getScrorexkp()
    {

        return $this->scrorexkp;
    }

    /**
     * Get the [paysbxkp] column value.
     *
     * @return   string
     */
    public function getPaysbxkp()
    {

        return $this->paysbxkp;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw \DateTime object will be returned.
     *
     * @return mixed Formatted date/time value as string or \DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = NULL)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTime ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw \DateTime object will be returned.
     *
     * @return mixed Formatted date/time value as string or \DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = NULL)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTime ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param      int $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::ID] = true;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [transaction] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setTransaction($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->transaction !== $v) {
            $this->transaction = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::TRANSACTION] = true;
        }


        return $this;
    } // setTransaction()

    /**
     * Set the value of [order_id] column.
     *
     * @param      int $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setOrderId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->order_id !== $v) {
            $this->order_id = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::ORDER_ID] = true;
        }

        if ($this->aOrder !== null && $this->aOrder->getId() !== $v) {
            $this->aOrder = null;
        }


        return $this;
    } // setOrderId()

    /**
     * Set the value of [numxkp] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setNumxkp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->numxkp !== $v) {
            $this->numxkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::NUMXKP] = true;
        }


        return $this;
    } // setNumxkp()

    /**
     * Set the value of [paiement] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setPaiement($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paiement !== $v) {
            $this->paiement = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::PAIEMENT] = true;
        }


        return $this;
    } // setPaiement()

    /**
     * Set the value of [montantxkp] column.
     *
     * @param      double $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setMontantxkp($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->montantxkp !== $v) {
            $this->montantxkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::MONTANTXKP] = true;
        }


        return $this;
    } // setMontantxkp()

    /**
     * Set the value of [devisexkp] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setDevisexkp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devisexkp !== $v) {
            $this->devisexkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::DEVISEXKP] = true;
        }


        return $this;
    } // setDevisexkp()

    /**
     * Set the value of [ipxkp] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setIpxkp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ipxkp !== $v) {
            $this->ipxkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::IPXKP] = true;
        }


        return $this;
    } // setIpxkp()

    /**
     * Set the value of [paysrxkp] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setPaysrxkp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paysrxkp !== $v) {
            $this->paysrxkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::PAYSRXKP] = true;
        }


        return $this;
    } // setPaysrxkp()

    /**
     * Set the value of [scrorexkp] column.
     *
     * @param      int $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setScrorexkp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->scrorexkp !== $v) {
            $this->scrorexkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::SCROREXKP] = true;
        }


        return $this;
    } // setScrorexkp()

    /**
     * Set the value of [paysbxkp] column.
     *
     * @param      string $v new value
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setPaysbxkp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paysbxkp !== $v) {
            $this->paysbxkp = $v;
            $this->modifiedColumns[KlikandpayReturnTableMap::PAYSBXKP] = true;
        }


        return $this;
    } // setPaysbxkp()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param      mixed $v string, integer (timestamp), or \DateTime value.
     *               Empty strings are treated as NULL.
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, '\DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($dt !== $this->created_at) {
                $this->created_at = $dt;
                $this->modifiedColumns[KlikandpayReturnTableMap::CREATED_AT] = true;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param      mixed $v string, integer (timestamp), or \DateTime value.
     *               Empty strings are treated as NULL.
     * @return   \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, '\DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($dt !== $this->updated_at) {
                $this->updated_at = $dt;
                $this->modifiedColumns[KlikandpayReturnTableMap::UPDATED_AT] = true;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->order_id !== 0) {
                return false;
            }

            if ($this->montantxkp !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {


            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : KlikandpayReturnTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : KlikandpayReturnTableMap::translateFieldName('Transaction', TableMap::TYPE_PHPNAME, $indexType)];
            $this->transaction = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : KlikandpayReturnTableMap::translateFieldName('OrderId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->order_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : KlikandpayReturnTableMap::translateFieldName('Numxkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->numxkp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : KlikandpayReturnTableMap::translateFieldName('Paiement', TableMap::TYPE_PHPNAME, $indexType)];
            $this->paiement = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : KlikandpayReturnTableMap::translateFieldName('Montantxkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->montantxkp = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : KlikandpayReturnTableMap::translateFieldName('Devisexkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->devisexkp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : KlikandpayReturnTableMap::translateFieldName('Ipxkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ipxkp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : KlikandpayReturnTableMap::translateFieldName('Paysrxkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->paysrxkp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : KlikandpayReturnTableMap::translateFieldName('Scrorexkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->scrorexkp = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : KlikandpayReturnTableMap::translateFieldName('Paysbxkp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->paysbxkp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : KlikandpayReturnTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, '\DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : KlikandpayReturnTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, '\DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = KlikandpayReturnTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating \Klikandpay\Model\KlikandpayReturn object", 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aOrder !== null && $this->order_id !== $this->aOrder->getId()) {
            $this->aOrder = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildKlikandpayReturnQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOrder = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see KlikandpayReturn::setDeleted()
     * @see KlikandpayReturn::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ChildKlikandpayReturnQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(KlikandpayReturnTableMap::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(KlikandpayReturnTableMap::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(KlikandpayReturnTableMap::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                KlikandpayReturnTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aOrder !== null) {
                if ($this->aOrder->isModified() || $this->aOrder->isNew()) {
                    $affectedRows += $this->aOrder->save($con);
                }
                $this->setOrder($this->aOrder);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[KlikandpayReturnTableMap::ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . KlikandpayReturnTableMap::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(KlikandpayReturnTableMap::ID)) {
            $modifiedColumns[':p' . $index++]  = 'ID';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::TRANSACTION)) {
            $modifiedColumns[':p' . $index++]  = 'TRANSACTION';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ORDER_ID';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::NUMXKP)) {
            $modifiedColumns[':p' . $index++]  = 'NUMXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAIEMENT)) {
            $modifiedColumns[':p' . $index++]  = 'PAIEMENT';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::MONTANTXKP)) {
            $modifiedColumns[':p' . $index++]  = 'MONTANTXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::DEVISEXKP)) {
            $modifiedColumns[':p' . $index++]  = 'DEVISEXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::IPXKP)) {
            $modifiedColumns[':p' . $index++]  = 'IPXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAYSRXKP)) {
            $modifiedColumns[':p' . $index++]  = 'PAYSRXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::SCROREXKP)) {
            $modifiedColumns[':p' . $index++]  = 'SCROREXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAYSBXKP)) {
            $modifiedColumns[':p' . $index++]  = 'PAYSBXKP';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'CREATED_AT';
        }
        if ($this->isColumnModified(KlikandpayReturnTableMap::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'UPDATED_AT';
        }

        $sql = sprintf(
            'INSERT INTO klikandpay_return (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ID':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'TRANSACTION':
                        $stmt->bindValue($identifier, $this->transaction, PDO::PARAM_STR);
                        break;
                    case 'ORDER_ID':
                        $stmt->bindValue($identifier, $this->order_id, PDO::PARAM_INT);
                        break;
                    case 'NUMXKP':
                        $stmt->bindValue($identifier, $this->numxkp, PDO::PARAM_STR);
                        break;
                    case 'PAIEMENT':
                        $stmt->bindValue($identifier, $this->paiement, PDO::PARAM_STR);
                        break;
                    case 'MONTANTXKP':
                        $stmt->bindValue($identifier, $this->montantxkp, PDO::PARAM_STR);
                        break;
                    case 'DEVISEXKP':
                        $stmt->bindValue($identifier, $this->devisexkp, PDO::PARAM_STR);
                        break;
                    case 'IPXKP':
                        $stmt->bindValue($identifier, $this->ipxkp, PDO::PARAM_STR);
                        break;
                    case 'PAYSRXKP':
                        $stmt->bindValue($identifier, $this->paysrxkp, PDO::PARAM_STR);
                        break;
                    case 'SCROREXKP':
                        $stmt->bindValue($identifier, $this->scrorexkp, PDO::PARAM_INT);
                        break;
                    case 'PAYSBXKP':
                        $stmt->bindValue($identifier, $this->paysbxkp, PDO::PARAM_STR);
                        break;
                    case 'CREATED_AT':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s") : null, PDO::PARAM_STR);
                        break;
                    case 'UPDATED_AT':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = KlikandpayReturnTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getTransaction();
                break;
            case 2:
                return $this->getOrderId();
                break;
            case 3:
                return $this->getNumxkp();
                break;
            case 4:
                return $this->getPaiement();
                break;
            case 5:
                return $this->getMontantxkp();
                break;
            case 6:
                return $this->getDevisexkp();
                break;
            case 7:
                return $this->getIpxkp();
                break;
            case 8:
                return $this->getPaysrxkp();
                break;
            case 9:
                return $this->getScrorexkp();
                break;
            case 10:
                return $this->getPaysbxkp();
                break;
            case 11:
                return $this->getCreatedAt();
                break;
            case 12:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['KlikandpayReturn'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['KlikandpayReturn'][$this->getPrimaryKey()] = true;
        $keys = KlikandpayReturnTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTransaction(),
            $keys[2] => $this->getOrderId(),
            $keys[3] => $this->getNumxkp(),
            $keys[4] => $this->getPaiement(),
            $keys[5] => $this->getMontantxkp(),
            $keys[6] => $this->getDevisexkp(),
            $keys[7] => $this->getIpxkp(),
            $keys[8] => $this->getPaysrxkp(),
            $keys[9] => $this->getScrorexkp(),
            $keys[10] => $this->getPaysbxkp(),
            $keys[11] => $this->getCreatedAt(),
            $keys[12] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOrder) {
                $result['Order'] = $this->aOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name
     * @param      mixed  $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return void
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = KlikandpayReturnTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setTransaction($value);
                break;
            case 2:
                $this->setOrderId($value);
                break;
            case 3:
                $this->setNumxkp($value);
                break;
            case 4:
                $this->setPaiement($value);
                break;
            case 5:
                $this->setMontantxkp($value);
                break;
            case 6:
                $this->setDevisexkp($value);
                break;
            case 7:
                $this->setIpxkp($value);
                break;
            case 8:
                $this->setPaysrxkp($value);
                break;
            case 9:
                $this->setScrorexkp($value);
                break;
            case 10:
                $this->setPaysbxkp($value);
                break;
            case 11:
                $this->setCreatedAt($value);
                break;
            case 12:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = KlikandpayReturnTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTransaction($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrderId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumxkp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPaiement($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMontantxkp($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDevisexkp($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIpxkp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPaysrxkp($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setScrorexkp($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPaysbxkp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCreatedAt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUpdatedAt($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(KlikandpayReturnTableMap::DATABASE_NAME);

        if ($this->isColumnModified(KlikandpayReturnTableMap::ID)) $criteria->add(KlikandpayReturnTableMap::ID, $this->id);
        if ($this->isColumnModified(KlikandpayReturnTableMap::TRANSACTION)) $criteria->add(KlikandpayReturnTableMap::TRANSACTION, $this->transaction);
        if ($this->isColumnModified(KlikandpayReturnTableMap::ORDER_ID)) $criteria->add(KlikandpayReturnTableMap::ORDER_ID, $this->order_id);
        if ($this->isColumnModified(KlikandpayReturnTableMap::NUMXKP)) $criteria->add(KlikandpayReturnTableMap::NUMXKP, $this->numxkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAIEMENT)) $criteria->add(KlikandpayReturnTableMap::PAIEMENT, $this->paiement);
        if ($this->isColumnModified(KlikandpayReturnTableMap::MONTANTXKP)) $criteria->add(KlikandpayReturnTableMap::MONTANTXKP, $this->montantxkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::DEVISEXKP)) $criteria->add(KlikandpayReturnTableMap::DEVISEXKP, $this->devisexkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::IPXKP)) $criteria->add(KlikandpayReturnTableMap::IPXKP, $this->ipxkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAYSRXKP)) $criteria->add(KlikandpayReturnTableMap::PAYSRXKP, $this->paysrxkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::SCROREXKP)) $criteria->add(KlikandpayReturnTableMap::SCROREXKP, $this->scrorexkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::PAYSBXKP)) $criteria->add(KlikandpayReturnTableMap::PAYSBXKP, $this->paysbxkp);
        if ($this->isColumnModified(KlikandpayReturnTableMap::CREATED_AT)) $criteria->add(KlikandpayReturnTableMap::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(KlikandpayReturnTableMap::UPDATED_AT)) $criteria->add(KlikandpayReturnTableMap::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(KlikandpayReturnTableMap::DATABASE_NAME);
        $criteria->add(KlikandpayReturnTableMap::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Klikandpay\Model\KlikandpayReturn (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTransaction($this->getTransaction());
        $copyObj->setOrderId($this->getOrderId());
        $copyObj->setNumxkp($this->getNumxkp());
        $copyObj->setPaiement($this->getPaiement());
        $copyObj->setMontantxkp($this->getMontantxkp());
        $copyObj->setDevisexkp($this->getDevisexkp());
        $copyObj->setIpxkp($this->getIpxkp());
        $copyObj->setPaysrxkp($this->getPaysrxkp());
        $copyObj->setScrorexkp($this->getScrorexkp());
        $copyObj->setPaysbxkp($this->getPaysbxkp());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 \Klikandpay\Model\KlikandpayReturn Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildOrder object.
     *
     * @param                  ChildOrder $v
     * @return                 \Klikandpay\Model\KlikandpayReturn The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrder(ChildOrder $v = null)
    {
        if ($v === null) {
            $this->setOrderId(0);
        } else {
            $this->setOrderId($v->getId());
        }

        $this->aOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addKlikandpayReturn($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildOrder object
     *
     * @param      ConnectionInterface $con Optional Connection object.
     * @return                 ChildOrder The associated ChildOrder object.
     * @throws PropelException
     */
    public function getOrder(ConnectionInterface $con = null)
    {
        if ($this->aOrder === null && ($this->order_id !== null)) {
            $this->aOrder = OrderQuery::create()->findPk($this->order_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrder->addKlikandpayReturns($this);
             */
        }

        return $this->aOrder;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->transaction = null;
        $this->order_id = null;
        $this->numxkp = null;
        $this->paiement = null;
        $this->montantxkp = null;
        $this->devisexkp = null;
        $this->ipxkp = null;
        $this->paysrxkp = null;
        $this->scrorexkp = null;
        $this->paysbxkp = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

        $this->aOrder = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(KlikandpayReturnTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     ChildKlikandpayReturn The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[KlikandpayReturnTableMap::UPDATED_AT] = true;

        return $this;
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {

    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
