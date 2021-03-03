<?php

namespace Klikandpay\Model\Base;

use \Exception;
use \PDO;
use Klikandpay\Model\KlikandpayReturn as ChildKlikandpayReturn;
use Klikandpay\Model\KlikandpayReturnQuery as ChildKlikandpayReturnQuery;
use Klikandpay\Model\Map\KlikandpayReturnTableMap;
use Klikandpay\Model\Thelia\Model\Order;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'klikandpay_return' table.
 *
 *
 *
 * @method     ChildKlikandpayReturnQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildKlikandpayReturnQuery orderByTransaction($order = Criteria::ASC) Order by the transaction column
 * @method     ChildKlikandpayReturnQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method     ChildKlikandpayReturnQuery orderByNumxkp($order = Criteria::ASC) Order by the numxkp column
 * @method     ChildKlikandpayReturnQuery orderByPaiement($order = Criteria::ASC) Order by the paiement column
 * @method     ChildKlikandpayReturnQuery orderByMontantxkp($order = Criteria::ASC) Order by the montantxkp column
 * @method     ChildKlikandpayReturnQuery orderByDevisexkp($order = Criteria::ASC) Order by the devisexkp column
 * @method     ChildKlikandpayReturnQuery orderByIpxkp($order = Criteria::ASC) Order by the ipxkp column
 * @method     ChildKlikandpayReturnQuery orderByPaysrxkp($order = Criteria::ASC) Order by the paysrxkp column
 * @method     ChildKlikandpayReturnQuery orderByScrorexkp($order = Criteria::ASC) Order by the scrorexkp column
 * @method     ChildKlikandpayReturnQuery orderByPaysbxkp($order = Criteria::ASC) Order by the paysbxkp column
 * @method     ChildKlikandpayReturnQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildKlikandpayReturnQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildKlikandpayReturnQuery groupById() Group by the id column
 * @method     ChildKlikandpayReturnQuery groupByTransaction() Group by the transaction column
 * @method     ChildKlikandpayReturnQuery groupByOrderId() Group by the order_id column
 * @method     ChildKlikandpayReturnQuery groupByNumxkp() Group by the numxkp column
 * @method     ChildKlikandpayReturnQuery groupByPaiement() Group by the paiement column
 * @method     ChildKlikandpayReturnQuery groupByMontantxkp() Group by the montantxkp column
 * @method     ChildKlikandpayReturnQuery groupByDevisexkp() Group by the devisexkp column
 * @method     ChildKlikandpayReturnQuery groupByIpxkp() Group by the ipxkp column
 * @method     ChildKlikandpayReturnQuery groupByPaysrxkp() Group by the paysrxkp column
 * @method     ChildKlikandpayReturnQuery groupByScrorexkp() Group by the scrorexkp column
 * @method     ChildKlikandpayReturnQuery groupByPaysbxkp() Group by the paysbxkp column
 * @method     ChildKlikandpayReturnQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildKlikandpayReturnQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildKlikandpayReturnQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildKlikandpayReturnQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildKlikandpayReturnQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildKlikandpayReturnQuery leftJoinOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Order relation
 * @method     ChildKlikandpayReturnQuery rightJoinOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Order relation
 * @method     ChildKlikandpayReturnQuery innerJoinOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the Order relation
 *
 * @method     ChildKlikandpayReturn findOne(ConnectionInterface $con = null) Return the first ChildKlikandpayReturn matching the query
 * @method     ChildKlikandpayReturn findOneOrCreate(ConnectionInterface $con = null) Return the first ChildKlikandpayReturn matching the query, or a new ChildKlikandpayReturn object populated from the query conditions when no match is found
 *
 * @method     ChildKlikandpayReturn findOneById(int $id) Return the first ChildKlikandpayReturn filtered by the id column
 * @method     ChildKlikandpayReturn findOneByTransaction(string $transaction) Return the first ChildKlikandpayReturn filtered by the transaction column
 * @method     ChildKlikandpayReturn findOneByOrderId(int $order_id) Return the first ChildKlikandpayReturn filtered by the order_id column
 * @method     ChildKlikandpayReturn findOneByNumxkp(string $numxkp) Return the first ChildKlikandpayReturn filtered by the numxkp column
 * @method     ChildKlikandpayReturn findOneByPaiement(string $paiement) Return the first ChildKlikandpayReturn filtered by the paiement column
 * @method     ChildKlikandpayReturn findOneByMontantxkp(double $montantxkp) Return the first ChildKlikandpayReturn filtered by the montantxkp column
 * @method     ChildKlikandpayReturn findOneByDevisexkp(string $devisexkp) Return the first ChildKlikandpayReturn filtered by the devisexkp column
 * @method     ChildKlikandpayReturn findOneByIpxkp(string $ipxkp) Return the first ChildKlikandpayReturn filtered by the ipxkp column
 * @method     ChildKlikandpayReturn findOneByPaysrxkp(string $paysrxkp) Return the first ChildKlikandpayReturn filtered by the paysrxkp column
 * @method     ChildKlikandpayReturn findOneByScrorexkp(int $scrorexkp) Return the first ChildKlikandpayReturn filtered by the scrorexkp column
 * @method     ChildKlikandpayReturn findOneByPaysbxkp(string $paysbxkp) Return the first ChildKlikandpayReturn filtered by the paysbxkp column
 * @method     ChildKlikandpayReturn findOneByCreatedAt(string $created_at) Return the first ChildKlikandpayReturn filtered by the created_at column
 * @method     ChildKlikandpayReturn findOneByUpdatedAt(string $updated_at) Return the first ChildKlikandpayReturn filtered by the updated_at column
 *
 * @method     array findById(int $id) Return ChildKlikandpayReturn objects filtered by the id column
 * @method     array findByTransaction(string $transaction) Return ChildKlikandpayReturn objects filtered by the transaction column
 * @method     array findByOrderId(int $order_id) Return ChildKlikandpayReturn objects filtered by the order_id column
 * @method     array findByNumxkp(string $numxkp) Return ChildKlikandpayReturn objects filtered by the numxkp column
 * @method     array findByPaiement(string $paiement) Return ChildKlikandpayReturn objects filtered by the paiement column
 * @method     array findByMontantxkp(double $montantxkp) Return ChildKlikandpayReturn objects filtered by the montantxkp column
 * @method     array findByDevisexkp(string $devisexkp) Return ChildKlikandpayReturn objects filtered by the devisexkp column
 * @method     array findByIpxkp(string $ipxkp) Return ChildKlikandpayReturn objects filtered by the ipxkp column
 * @method     array findByPaysrxkp(string $paysrxkp) Return ChildKlikandpayReturn objects filtered by the paysrxkp column
 * @method     array findByScrorexkp(int $scrorexkp) Return ChildKlikandpayReturn objects filtered by the scrorexkp column
 * @method     array findByPaysbxkp(string $paysbxkp) Return ChildKlikandpayReturn objects filtered by the paysbxkp column
 * @method     array findByCreatedAt(string $created_at) Return ChildKlikandpayReturn objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return ChildKlikandpayReturn objects filtered by the updated_at column
 *
 */
abstract class KlikandpayReturnQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \Klikandpay\Model\Base\KlikandpayReturnQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\Klikandpay\\Model\\KlikandpayReturn', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildKlikandpayReturnQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildKlikandpayReturnQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \Klikandpay\Model\KlikandpayReturnQuery) {
            return $criteria;
        }
        $query = new \Klikandpay\Model\KlikandpayReturnQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildKlikandpayReturn|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = KlikandpayReturnTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return   ChildKlikandpayReturn A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, TRANSACTION, ORDER_ID, NUMXKP, PAIEMENT, MONTANTXKP, DEVISEXKP, IPXKP, PAYSRXKP, SCROREXKP, PAYSBXKP, CREATED_AT, UPDATED_AT FROM klikandpay_return WHERE ID = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            $obj = new ChildKlikandpayReturn();
            $obj->hydrate($row);
            KlikandpayReturnTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildKlikandpayReturn|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(KlikandpayReturnTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(KlikandpayReturnTableMap::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the transaction column
     *
     * Example usage:
     * <code>
     * $query->filterByTransaction('fooValue');   // WHERE transaction = 'fooValue'
     * $query->filterByTransaction('%fooValue%'); // WHERE transaction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transaction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByTransaction($transaction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transaction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transaction)) {
                $transaction = str_replace('*', '%', $transaction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::TRANSACTION, $transaction, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId(1234); // WHERE order_id = 1234
     * $query->filterByOrderId(array(12, 34)); // WHERE order_id IN (12, 34)
     * $query->filterByOrderId(array('min' => 12)); // WHERE order_id > 12
     * </code>
     *
     * @see       filterByOrder()
     *
     * @param     mixed $orderId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the numxkp column
     *
     * Example usage:
     * <code>
     * $query->filterByNumxkp('fooValue');   // WHERE numxkp = 'fooValue'
     * $query->filterByNumxkp('%fooValue%'); // WHERE numxkp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numxkp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByNumxkp($numxkp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numxkp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numxkp)) {
                $numxkp = str_replace('*', '%', $numxkp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::NUMXKP, $numxkp, $comparison);
    }

    /**
     * Filter the query on the paiement column
     *
     * Example usage:
     * <code>
     * $query->filterByPaiement('fooValue');   // WHERE paiement = 'fooValue'
     * $query->filterByPaiement('%fooValue%'); // WHERE paiement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paiement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByPaiement($paiement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paiement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paiement)) {
                $paiement = str_replace('*', '%', $paiement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::PAIEMENT, $paiement, $comparison);
    }

    /**
     * Filter the query on the montantxkp column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantxkp(1234); // WHERE montantxkp = 1234
     * $query->filterByMontantxkp(array(12, 34)); // WHERE montantxkp IN (12, 34)
     * $query->filterByMontantxkp(array('min' => 12)); // WHERE montantxkp > 12
     * </code>
     *
     * @param     mixed $montantxkp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByMontantxkp($montantxkp = null, $comparison = null)
    {
        if (is_array($montantxkp)) {
            $useMinMax = false;
            if (isset($montantxkp['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::MONTANTXKP, $montantxkp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantxkp['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::MONTANTXKP, $montantxkp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::MONTANTXKP, $montantxkp, $comparison);
    }

    /**
     * Filter the query on the devisexkp column
     *
     * Example usage:
     * <code>
     * $query->filterByDevisexkp('fooValue');   // WHERE devisexkp = 'fooValue'
     * $query->filterByDevisexkp('%fooValue%'); // WHERE devisexkp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devisexkp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByDevisexkp($devisexkp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devisexkp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devisexkp)) {
                $devisexkp = str_replace('*', '%', $devisexkp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::DEVISEXKP, $devisexkp, $comparison);
    }

    /**
     * Filter the query on the ipxkp column
     *
     * Example usage:
     * <code>
     * $query->filterByIpxkp('fooValue');   // WHERE ipxkp = 'fooValue'
     * $query->filterByIpxkp('%fooValue%'); // WHERE ipxkp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ipxkp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByIpxkp($ipxkp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ipxkp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ipxkp)) {
                $ipxkp = str_replace('*', '%', $ipxkp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::IPXKP, $ipxkp, $comparison);
    }

    /**
     * Filter the query on the paysrxkp column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysrxkp('fooValue');   // WHERE paysrxkp = 'fooValue'
     * $query->filterByPaysrxkp('%fooValue%'); // WHERE paysrxkp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysrxkp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByPaysrxkp($paysrxkp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysrxkp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysrxkp)) {
                $paysrxkp = str_replace('*', '%', $paysrxkp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::PAYSRXKP, $paysrxkp, $comparison);
    }

    /**
     * Filter the query on the scrorexkp column
     *
     * Example usage:
     * <code>
     * $query->filterByScrorexkp(1234); // WHERE scrorexkp = 1234
     * $query->filterByScrorexkp(array(12, 34)); // WHERE scrorexkp IN (12, 34)
     * $query->filterByScrorexkp(array('min' => 12)); // WHERE scrorexkp > 12
     * </code>
     *
     * @param     mixed $scrorexkp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByScrorexkp($scrorexkp = null, $comparison = null)
    {
        if (is_array($scrorexkp)) {
            $useMinMax = false;
            if (isset($scrorexkp['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::SCROREXKP, $scrorexkp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scrorexkp['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::SCROREXKP, $scrorexkp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::SCROREXKP, $scrorexkp, $comparison);
    }

    /**
     * Filter the query on the paysbxkp column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysbxkp('fooValue');   // WHERE paysbxkp = 'fooValue'
     * $query->filterByPaysbxkp('%fooValue%'); // WHERE paysbxkp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysbxkp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByPaysbxkp($paysbxkp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysbxkp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysbxkp)) {
                $paysbxkp = str_replace('*', '%', $paysbxkp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::PAYSBXKP, $paysbxkp, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(KlikandpayReturnTableMap::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KlikandpayReturnTableMap::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Klikandpay\Model\Thelia\Model\Order object
     *
     * @param \Klikandpay\Model\Thelia\Model\Order|ObjectCollection $order The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function filterByOrder($order, $comparison = null)
    {
        if ($order instanceof \Klikandpay\Model\Thelia\Model\Order) {
            return $this
                ->addUsingAlias(KlikandpayReturnTableMap::ORDER_ID, $order->getId(), $comparison);
        } elseif ($order instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(KlikandpayReturnTableMap::ORDER_ID, $order->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByOrder() only accepts arguments of type \Klikandpay\Model\Thelia\Model\Order or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Order relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function joinOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Order');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Order');
        }

        return $this;
    }

    /**
     * Use the Order relation Order object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Klikandpay\Model\Thelia\Model\OrderQuery A secondary query class using the current class as primary query
     */
    public function useOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Order', '\Klikandpay\Model\Thelia\Model\OrderQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildKlikandpayReturn $klikandpayReturn Object to remove from the list of results
     *
     * @return ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function prune($klikandpayReturn = null)
    {
        if ($klikandpayReturn) {
            $this->addUsingAlias(KlikandpayReturnTableMap::ID, $klikandpayReturn->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the klikandpay_return table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            KlikandpayReturnTableMap::clearInstancePool();
            KlikandpayReturnTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildKlikandpayReturn or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildKlikandpayReturn object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public function delete(ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KlikandpayReturnTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(KlikandpayReturnTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        KlikandpayReturnTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            KlikandpayReturnTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(KlikandpayReturnTableMap::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(KlikandpayReturnTableMap::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(KlikandpayReturnTableMap::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(KlikandpayReturnTableMap::UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(KlikandpayReturnTableMap::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     ChildKlikandpayReturnQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(KlikandpayReturnTableMap::CREATED_AT);
    }

} // KlikandpayReturnQuery
