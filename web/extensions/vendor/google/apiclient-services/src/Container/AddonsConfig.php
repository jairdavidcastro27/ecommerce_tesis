<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Container;

class AddonsConfig extends \Google\Model
{
  /**
   * @var CloudRunConfig
   */
  public $cloudRunConfig;
  protected $cloudRunConfigType = CloudRunConfig::class;
  protected $cloudRunConfigDataType = '';
  /**
   * @var ConfigConnectorConfig
   */
  public $configConnectorConfig;
  protected $configConnectorConfigType = ConfigConnectorConfig::class;
  protected $configConnectorConfigDataType = '';
  /**
   * @var DnsCacheConfig
   */
  public $dnsCacheConfig;
  protected $dnsCacheConfigType = DnsCacheConfig::class;
  protected $dnsCacheConfigDataType = '';
  /**
   * @var GcePersistentDiskCsiDriverConfig
   */
  public $gcePersistentDiskCsiDriverConfig;
  protected $gcePersistentDiskCsiDriverConfigType = GcePersistentDiskCsiDriverConfig::class;
  protected $gcePersistentDiskCsiDriverConfigDataType = '';
  /**
   * @var GcpFilestoreCsiDriverConfig
   */
  public $gcpFilestoreCsiDriverConfig;
  protected $gcpFilestoreCsiDriverConfigType = GcpFilestoreCsiDriverConfig::class;
  protected $gcpFilestoreCsiDriverConfigDataType = '';
  /**
   * @var GcsFuseCsiDriverConfig
   */
  public $gcsFuseCsiDriverConfig;
  protected $gcsFuseCsiDriverConfigType = GcsFuseCsiDriverConfig::class;
  protected $gcsFuseCsiDriverConfigDataType = '';
  /**
   * @var GkeBackupAgentConfig
   */
  public $gkeBackupAgentConfig;
  protected $gkeBackupAgentConfigType = GkeBackupAgentConfig::class;
  protected $gkeBackupAgentConfigDataType = '';
  /**
   * @var HorizontalPodAutoscaling
   */
  public $horizontalPodAutoscaling;
  protected $horizontalPodAutoscalingType = HorizontalPodAutoscaling::class;
  protected $horizontalPodAutoscalingDataType = '';
  /**
   * @var HttpLoadBalancing
   */
  public $httpLoadBalancing;
  protected $httpLoadBalancingType = HttpLoadBalancing::class;
  protected $httpLoadBalancingDataType = '';
  /**
   * @var KubernetesDashboard
   */
  public $kubernetesDashboard;
  protected $kubernetesDashboardType = KubernetesDashboard::class;
  protected $kubernetesDashboardDataType = '';
  /**
   * @var NetworkPolicyConfig
   */
  public $networkPolicyConfig;
  protected $networkPolicyConfigType = NetworkPolicyConfig::class;
  protected $networkPolicyConfigDataType = '';

  /**
   * @param CloudRunConfig
   */
  public function setCloudRunConfig(CloudRunConfig $cloudRunConfig)
  {
    $this->cloudRunConfig = $cloudRunConfig;
  }
  /**
   * @return CloudRunConfig
   */
  public function getCloudRunConfig()
  {
    return $this->cloudRunConfig;
  }
  /**
   * @param ConfigConnectorConfig
   */
  public function setConfigConnectorConfig(ConfigConnectorConfig $configConnectorConfig)
  {
    $this->configConnectorConfig = $configConnectorConfig;
  }
  /**
   * @return ConfigConnectorConfig
   */
  public function getConfigConnectorConfig()
  {
    return $this->configConnectorConfig;
  }
  /**
   * @param DnsCacheConfig
   */
  public function setDnsCacheConfig(DnsCacheConfig $dnsCacheConfig)
  {
    $this->dnsCacheConfig = $dnsCacheConfig;
  }
  /**
   * @return DnsCacheConfig
   */
  public function getDnsCacheConfig()
  {
    return $this->dnsCacheConfig;
  }
  /**
   * @param GcePersistentDiskCsiDriverConfig
   */
  public function setGcePersistentDiskCsiDriverConfig(GcePersistentDiskCsiDriverConfig $gcePersistentDiskCsiDriverConfig)
  {
    $this->gcePersistentDiskCsiDriverConfig = $gcePersistentDiskCsiDriverConfig;
  }
  /**
   * @return GcePersistentDiskCsiDriverConfig
   */
  public function getGcePersistentDiskCsiDriverConfig()
  {
    return $this->gcePersistentDiskCsiDriverConfig;
  }
  /**
   * @param GcpFilestoreCsiDriverConfig
   */
  public function setGcpFilestoreCsiDriverConfig(GcpFilestoreCsiDriverConfig $gcpFilestoreCsiDriverConfig)
  {
    $this->gcpFilestoreCsiDriverConfig = $gcpFilestoreCsiDriverConfig;
  }
  /**
   * @return GcpFilestoreCsiDriverConfig
   */
  public function getGcpFilestoreCsiDriverConfig()
  {
    return $this->gcpFilestoreCsiDriverConfig;
  }
  /**
   * @param GcsFuseCsiDriverConfig
   */
  public function setGcsFuseCsiDriverConfig(GcsFuseCsiDriverConfig $gcsFuseCsiDriverConfig)
  {
    $this->gcsFuseCsiDriverConfig = $gcsFuseCsiDriverConfig;
  }
  /**
   * @return GcsFuseCsiDriverConfig
   */
  public function getGcsFuseCsiDriverConfig()
  {
    return $this->gcsFuseCsiDriverConfig;
  }
  /**
   * @param GkeBackupAgentConfig
   */
  public function setGkeBackupAgentConfig(GkeBackupAgentConfig $gkeBackupAgentConfig)
  {
    $this->gkeBackupAgentConfig = $gkeBackupAgentConfig;
  }
  /**
   * @return GkeBackupAgentConfig
   */
  public function getGkeBackupAgentConfig()
  {
    return $this->gkeBackupAgentConfig;
  }
  /**
   * @param HorizontalPodAutoscaling
   */
  public function setHorizontalPodAutoscaling(HorizontalPodAutoscaling $horizontalPodAutoscaling)
  {
    $this->horizontalPodAutoscaling = $horizontalPodAutoscaling;
  }
  /**
   * @return HorizontalPodAutoscaling
   */
  public function getHorizontalPodAutoscaling()
  {
    return $this->horizontalPodAutoscaling;
  }
  /**
   * @param HttpLoadBalancing
   */
  public function setHttpLoadBalancing(HttpLoadBalancing $httpLoadBalancing)
  {
    $this->httpLoadBalancing = $httpLoadBalancing;
  }
  /**
   * @return HttpLoadBalancing
   */
  public function getHttpLoadBalancing()
  {
    return $this->httpLoadBalancing;
  }
  /**
   * @param KubernetesDashboard
   */
  public function setKubernetesDashboard(KubernetesDashboard $kubernetesDashboard)
  {
    $this->kubernetesDashboard = $kubernetesDashboard;
  }
  /**
   * @return KubernetesDashboard
   */
  public function getKubernetesDashboard()
  {
    return $this->kubernetesDashboard;
  }
  /**
   * @param NetworkPolicyConfig
   */
  public function setNetworkPolicyConfig(NetworkPolicyConfig $networkPolicyConfig)
  {
    $this->networkPolicyConfig = $networkPolicyConfig;
  }
  /**
   * @return NetworkPolicyConfig
   */
  public function getNetworkPolicyConfig()
  {
    return $this->networkPolicyConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddonsConfig::class, 'Google_Service_Container_AddonsConfig');
